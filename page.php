<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>JOB SEARCH</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
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
  <br>
   <div class="form-group ">
    <div class="input-group mb-2 input-group-lg">
    <div class="input-group-prepend">
    
  </div>
  <input type="text" name="search_text" id="search_text" placeholder="Enter Skills to Find Job" class="form-control" />
  <label class="input-group-text" for="inputGroupSelect01">Search</label>
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>