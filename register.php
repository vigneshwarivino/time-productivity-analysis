<!doctype html>
<html>
<head>
<title>Register</title>
    <style> 
        body{
            
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 50px;
    margin-left: 50px;
    background-color: Orange ;
    color: black;
    font-family: verdana;
    font-size: 200%
    
        }
            h1 {
    color: indigo;
    font-family: verdana;
    font-size: 100%;
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
    <fieldset>
<center>        
FirstName  :  <input type="text" name="user"><br />
MiddleName :  <input type="text" name="user"><br />	
LastName   :  <input type="text" name="user"><br />
Email      :  <input type="email" name="email"><br />
Password   :  <input type=""name="password" name="pass"><br />
Confirm password : <input type=""name="password" name="pass"><br />
PhoneNumber:  <input type="number" name="number"><br />
<a href="login.php"><input type="submit" value="Register" name="submit"/>
</center>

            
        </fieldset>
        </legend>

</form>
    
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db(db,'user_registration') or die("cannot select DB");

	$query=mysqli_query("SELECT * FROM login WHERE username='".$user."'");
	$numrows=mysqli_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO login(username,password) VALUES('$user','$pass')";

	$result=mysqli_query($sql);


	 
	if($result){
	echo "Account Successfully Created";
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>

</body>
</html>
