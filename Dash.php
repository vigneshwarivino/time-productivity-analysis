<!DOCTYPE html>
<html>
<title>Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <a href="Login.php"><span class="w3-bar-item w3-right">Logout</span></a>

  </div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="download.jpg" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome</span><br>
      
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="Work.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-fw fa-bars"></i>  Task</a>
	<a href="genex.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Report</a>
   
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        
        <div class="w3-right">

        </div>
        <div class="w3-clear"></div>
        <a href="Graph.php"><h4>Documentation</h4></a>
      </div>
    </div>
	
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        
        <div class="w3-right">
         
        </div>
        <div class="w3-clear"></div>
        <a href="GGraph.php"><h4>Coding</h4></a>
      </div>
    </div>
	
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        
        <div class="w3-right">
         
        </div>
        <div class="w3-clear"></div>
        <a href="Graph3.php"><h4>Testing</h4></a>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        
        <div class="w3-right">
         
        </div>
        <div class="w3-clear"></div>
        <a href="Graph4.php"><h4>Internet</h4></a>
      </div>
    </div>
  </div>

  
  

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>
<?php
include 'config.php';
$sql = 'SELECT * FROM works';
         $result = mysqli_query($conn, $sql);
		// print_r($result);exit;
$dataPoints=array();
         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               $dataPoints = array(
	array("x" => $row["Task"] , "y" =>$row["Status"]  ));
	
            }
         } else {
            echo "0 results";
         }
// print_r($dataPoints);exit;
 


?>
</body>
</html>
