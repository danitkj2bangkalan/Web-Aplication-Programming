
<?php
    $namaempty = " ";

    // kawasan validasi

        $errors = array();     
                if (isset($_POST['surname']))     
                {       
                    //require 'validateName';     
                    validateName($errors, $_POST, 'surname');     
                    if ($errors)     
                        {      
                            /*echo '<h1>Invalid, correct the following errors:</h1>';     
                            foreach ($errors as $field => $error)         
                                echo "$field $error</br>"; // tampilkan kembali form 
                            include 'form.php';  */
                            //$namaempty = "kosong";    
                    }     
                    else     
                    {         
                        //echo 'Form submitted successfully with no errors';        
                    }     
                }     
                else {

                }// tampilkan kembali form   
                    //include 'form.php'; 

        function validateName (&$errors, $field_list, $field_name)
        { 
            //include "connect.php";
            $username = $field_list[$field_name];
            
            if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
            {  
                //pengecekan kolom terisi apa tidak
                $errors = "* Kolom harus diisi";
                $error_confirm = true;
            }  else {
                //jika variabel ada lebih dari 1 maka username sudah digunakan
                $errors = "";
                $error_confirm = true;
            }  
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="360"> 
  <!-- Merefresh halaman setiap 50 detik -->
    <link href="./form.css" rel="stylesheet" type="text/css">
    <title>Form</title>
</head>

<body class = "body">
    <h1>Registration Form</h1>
    <form action = "./form.php" method="POST">
    <fieldset class = "content">
        <table>
        <th>Person detail</th>
            <tr>
                <td>
                     <label for="surname">Surname</label>
                </td>
                <td>
                    <input type="text" name="surname">
                </td>
                <td class = 'error'><?php
                     if(isset($_POST["surname"])){ echo $errors;}
                ?></td>
            </tr>
            <tr>
                <td>
                    <label for="firstName">First Name</label>
                </td>
                <td>
                    <input type="text" name="firstName">
                <td>
                <td class = "error">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email Address</label>
                </td>
                <td>
                    <input type="email" name="email">
                </td>
                <td class = "error">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password</label>
                </td>
                <td>
                    <input type="password" name="password">
                </td>
                <td class = "error">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="confirmpassword">Confirm Password</label>
                </td>
                <td>
                    <input type="password" name="confirmpassword">
                </td>
                <td class = "error">
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <input type="submit" name="register" value="Register">
                    <input type="reset" name="reset" value="Reset">
                </td>
                <td class = "error">
                </td>
            </tr>
        </table>
        </fieldset>
    </form>
</body>
</html>