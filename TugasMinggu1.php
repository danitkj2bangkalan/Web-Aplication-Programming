<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monthly</title>
    <style>
        body {
            font: 15px arial, sans-serif;
            text-align: center;
        }

        table,
        tr,
        td,
        th {
            border: 1px solid black;
        }

        table {
            margin: auto;
            table-layout: fixed;
            width: 360px;
            height: 300px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto auto auto;
        }

        .item {
            grid-column: span 2;
        }

        h1 {
            grid-column: span 6;
        }

        h3 {
            grid-column: span 6;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="grid-container">
        <?php include('monthlyCalendarTM1.php');
        $year = 2019;
        $HoliDay = [0 => "New Year's Day", 35 => "Chinese new year", 65 => "Bali Hindu new year", 92 => "Isra' Mi'raj", 108 => "Good Friday", 120 => "Labour day", 138 => "Waisak day", 149 => "Ascension day of Jesus Christ", 151 => "Pancasila Day", 153 => "First Join Holiday Before Idul Fitri", 154 => "Second join holiday before Idul Fitri", 155 => "Idul Fitri Day 1", 156 => "Idul Fitri Day 2", 157 => "Join holiday after Idul Fitri", 222 => "Idul Adha", 228 => "Independence Day", 243 => "Islamic Ney Year", 322 => "Prophet Muhammad's Birthday", 357 => "Christmas Holiday", 358 => "Christmas Day"]; ?>
        <h1>Kalender <?= $year; ?></h1>
        <?php
        for ($i = 1; $i <= 12; $i++) : ?>
            <div class="item"><?php echo display_month($i, $year, $HoliDay); ?></div>
        <?php endfor; ?>
        <?php
        echo "<h3> National Holiday $year </h3>"; ?>
        <table style="border:none;text-align: left;">
            <?php foreach ($HoliDay as $key => $val) :
                $day = date('j', mktime(0, 0, 0, 1, $key + 1, $year));
                $month = date('n', mktime(0, 0, 0, 1, $key + 1, $year));
                ?>
                <tr style="border:none;">
                    <td style="border:none;" colspan="3"><?= $year . '-' . $month . '-' . $day; ?></td>
                    <td style="border:none;" colspan="1">:</td>
                    <td style="border:none;" colspan="8"><?= $HoliDay[$key]; ?></td>
                </tr>
                <!-- echo $year . '-' . $month . '-' . $day . ':' . $HoliDay[$key] . '<br>'; -->
            <?php endforeach; ?>
        </table>
    </div>

</body>

</html>