<!doctype html>
<html>
<head>
<title>Register</title>
    <style> 
        body {
            
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 50px;
    margin-left: 50px;
    background-color: Orange ;
    color: black;
    font-family: verdana;
    font-size: 150%
    
        }
		
         h1 {
    color: indigo;
    font-family: verdana;
    font-size: 150%;
}
         h2 {
    color: indigo;
    font-family: verdana;
    font-size: 100%;
}
            
        
    </style>
</head>
<body>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Basic Header</title>
	<link rel="stylesheet" href="assets/header-basic.css">
	<link href="assets/style.css" rel="stylesheet">


</head>

	<body>
       
		<header class="header-basic">
				
			
    <div id="container">
        <div class="image-container" style="padding-top:60px;">
	
	</div>
    </div>

	</body>

</html>

   
    
 
    <center><h1>REGISTRATION FORM</h1></center>
<form action="" method="POST">
    <legend>
    
 <center>        
FirstName :<br>  
<input type="text" name="Firstname" /> <br>
MiddleName :<br>  
<input type="text" name="Middlename" /> <br>	
LastName :<br>  
<input type="text" name="Lastname" /> <br>
Email :<br> 
<input type="email" name="Email" /> <br>
Password :<br>
<input type="password" name="Password" /> <br>
Confirm password :<br>
<input type="password" name="Confirmpassword" /> <br>
PhoneNumber :<br>  
<input type="number" name="phonenumber" /> <br>
<a href="login.php"><input type="submit" value="Register" name="submit" />

  </center>

     </legend>

</form>
    
<?php
include 'config.php';
if(isset($_POST["submit"])){


	$firstname=$_POST['Firstname'];
	$middlename=$_POST['Middlename'];
    $lastname=$_POST['Lastname'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$confirmpassword=$_POST['Confirmpassword'];
	$phonenumber=$_POST['phonenumber'];
	

	$sql="INSERT INTO register(Firstname,Middlename,Lastname,Email,Password,Confirmpassword,phonenumber) VALUES('".$firstname."','".$middlename."','".$lastname."','".$email."','".$password."','".$confirmpassword."','".$phonenumber."')";

	if($result=$conn->query($sql))
	{
	echo "Account Successfully Created";	
	}
	else
	{
		echo "That username already exists! Please try again with another.";
    }
    }
	else {
		echo "All fields are required!";
	}
	
		
?>

</body>
</html>