<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #cce5ff;
  padding: 20px;
  text-align: center;
  color: #004085;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #004085;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav-right {
  float: right;
}
</style>
</head>
<body>

<div class="header">
  <h1>Welcome to JOB PORTAL</h1>
</div>

<div class="topnav">
    <a href="homepage.php">Home</a>
    <a href="aboutus.php">About Us</a>
    <div class="topnav-right">
  <a href="index.php">LOG OUT</a>
</div>
</div>

</body>
<body>
	<div id="main-wrapper">
		<center><h3>Hello <?php echo $_SESSION['username']; ?></h3></center>
		
		<form action="page.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<button class="logout_button" type="submit">Search Job Here</button>	
			</div>
		</form>
	</div>
</body>
</html>


