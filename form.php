<?php
    global $sname;
    $fname;
    $lname;
    //kawasan validasi
        $errors = array();   
        $ferrors = array();  
                if (isset($_POST['surname']))     
                {       
                    //require 'validateName';     
                    validateName($errors, $_POST, 'surname');      
                }     
                else if(isset($_POST['firstname'])){
                    validatefName($ferrors, $_POST, 'firstname'); 
                }

        function validateName (&$errors, $field_list, $field_name)
        { 
            //include "connect.php";
            $pattern = "/^[a-zA-Z'-]+$/";
            $username = $field_list[$field_name];
            if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){  
                //pengecekan kolom terisi apa tidak
                $errors = " Kolom Surname harus diisi";
            }else if(!preg_match($pattern, $field_list[$field_name])){
                $errors = "harus alfabet";

            }else{
                $errors = "";
            }  
        }

        function validatefName (&$ferrors, $field_list, $field_name)
        { 
            //include "connect.php";
            $pattern = "/^[a-zA-Z'-]+$/";
            $username = $field_list[$field_name];
            if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){  
                //pengecekan kolom terisi apa tidak
                $ferrors = "* Kolom harus diisi";
            }else if(!preg_match($pattern, $field_list[$field_name])){
                $errors = "harus alfabet";

            }else{
                $ferrors = "";
            }  
        }

?>

<!--kawasan UI-->
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
                    <input type="text" name="firstname">
                </td>
                <td class = "error"><?php
                     if(isset($_POST["firstname"])){ echo $ferrors;}
                ?>
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