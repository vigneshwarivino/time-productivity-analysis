<!doctype html>
<html>
<head>
<title>Login</title>
    <style> 
        body {
    background-color:violet;
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
	color:red;
    font-family: verdana;
    font-size: 100%
    
 
            h1 {
    color: indigo;
    font-family: Sans-serif;
    font-size: 200%;
}
        h3 {
    color: indigo;
    font-family: verdana;
    font-size: 100%;
}
		}   
        
    </style>
</head>
<body>
    
     <center><h1>TIME AND PRODUCTIVITY ANALYSIS</h1></center>

<center><p><a href="register.php">Register</a> | <a href="login.php">login</a></p></center>
<center>
<form action="" method="POST">
Username:<br> 
<input type="text" name="username" /><br>
Password:<br>
<input type="password" name="password" /><br>	
<br><p>
<a href="dash.html">
<input type="submit" value="Login" name="submit" /></p>
<button class="button">
  <a href="">
  <font color="black"size="2px"face ="arial">forget password?</font>
  </a>
  </button>
</form>
</center>
<?php

$dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'analysis';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         //echo 'Connected successfully<br>';
		 
		 if(isset($_POST['submit'])){
// Define $username and $password 
$Firstname=$_POST['username']; 
$Password=$_POST['password'];
         $sql = "SELECT Firstname,Password FROM register WHERE Firstname='".$Firstname."' AND Password='".$Password."' ";
         $result = mysqli_query($conn, $sql);
//print_r($result);exit;
         if (mysqli_num_rows($result) > 0) {
           header('Location: dash.html');
         } else {
            echo "Invalid username and Password";
         }
		 }
         mysqli_close($conn);

		 /* 
include 'config.php';

if(isset($_POST['submit'])){
// Define $username and $password 
$Firstnmae=$_POST['username']; 
$Password=$_POST['password'];


$query=mysqli_query($conn,"SELECT * FROM login WHERE Firstname='".$username."' AND Password='".$password."' ");
$numrows=mysqli_num_rows($query);
print_r($numrows); exit;
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) 
{
    echo "Success! $count";
} else {
    echo "Unsuccessful! $count";
}
} */
?>

</body>
</html>