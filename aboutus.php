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
<center><h3>This Page is About Us</h3></center>
<center><p>This is the Job Portal where the people can search Job according to their Skill-Set, So search job and enjoy.</p></center>
<center><p>Project is done by:</p></center>
<center><p>Name: Ashish Kumar </p></center>
<center><p>Reg.No: 11607650</p></center>
</html>