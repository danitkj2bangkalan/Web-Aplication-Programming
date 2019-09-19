<?php
//Hari Libur
function display_month($month, $year, $HoliDay)
{
    //H2
    $month_name = date('F', mktime(0, 0, 0, $month, 1, $year));
    echo "<h2>$month_name</h2>";
    // Draw Calendar table headings 
    $first_day_of_month = mktime(0, 0, 0, $month, 1, $year);
    $headings = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
    $first_day_of_week = date('w', mktime(0, 0, 0, $month, 1, $year));
    $days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
    // $sunday = [0, 7, 14, 21, 28, 35];
    $friday = [5, 12, 19, 26, 33, 40];
    $day_counter = $first_day_of_week;
    $cur_day = " ";
    //Deklarasi Table
    echo "<table>";
    //Tambah Header Hari
    echo "<tr>";
    for ($day = 0; $day <= 6; $day++) {
        echo "<th style='background-color:yellow;'>$headings[$day]</th>";
    }
    echo "</tr>";
    //isi tanggal kosong
    echo "<tr>";
    if ($first_day_of_week > 0) {
        echo "<td colspan=\"$first_day_of_week\">&nbsp;</td>";
    }
    //Isi tanggal

    for ($day_of_month = 1; $day_of_month <= $days_in_month; $day_of_month++) {
        $countDayinYear = date('z', mktime(0, 0, 0, $month, $day_of_month, $year));
        if (date('j') == $day_of_month && $month == date('n')) {
            $cur_day = "#b1faed";
        }
        if ($day_counter % 7 == 0 && $day_counter > 0) {
            echo "<tr>";
        }
        if (in_array($day_counter, $friday)) {
            $cur_day =  "#c2fc03";
        }
        if (array_key_exists($countDayinYear, $HoliDay)) {
            $cur_day =  "#d41313";
        }
        echo "<td style='background-color:$cur_day'>$day_of_month</td>";
        $day_counter += 1;
        $cur_day = " ";
    }
    echo "</tr>";
    //Tutup table
    echo "</table>";
}
 
