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
   	<h2>Person Detail</h2>
   	<fieldset class = "content">
   		<h2>Form submitted successfully with no errors</h2>
   	</fieldset>
    <?php

		$dbc = new PDO('mysql:HOST=localhost;dbname=', 'root', '');
		$query = $dbc->prepare("INSERT INTO form(Surname,FirstName,Email,Password,ConfirmPassword)
		                        VALUE(:surname,:firstName,:email,:password,:confirmpassword)");
		$query->bindValue(':surname', $_POST['surname']);
		$query->bindValue(':firstName', $_POST['firstName']);
		$query->bindValue(':email', $_POST['email']);
		$query->bindValue(':password', $_POST['password']);
		$query->bindValue(':confirmpassword', $_POST['confirmpassword']);
		$query->execute();

		// kawasan validasi

		$errors = array();     
                if (isset($_POST['surname']))     
                {       
                    //require 'validateName';     
                    validateName($errors, $_POST, 'surname');     
                    if ($errors)     
                        {      
                            echo '<h1>Invalid, correct the following errors:</h1>';     
                            foreach ($errors as $field => $error)         
                                echo "$field $error</br>"; // tampilkan kembali form 
                            include 'form.php';  
                            $namaempty = "kosong";    
                    }     
                    else     
                    {         
                        //echo 'Form submitted successfully with no errors';        
                    }     
                }     
                else {

                }// tampilkan kembali form   
                    //include 'form.php'; 

        function validateName(&$errors, $field_list, $field_name){	
		$pattern = "/^[a-zA-Z'-]+$/"; // format nama (alfabet)
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
			$errors[$field_name] = 'required';
		if (!preg_match($pattern, $field_list[$field_name]))
			$errors[$field_name] = 'invalid';
		}
	?>
</body>

</html>