<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "job");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM tbl_customer 
  WHERE req_skill LIKE '%".$search."%'";
}
else
{
 $query = "SELECT * FROM tbl_customer ORDER BY job_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive ">
   <table class="table table-bordered table-dark table-striped">
    <tr>
     <th>Job ID</th>
     <th>Job Title</th>
     <th>Req. Experience</th>
     <th>Skills</th>
     <th>Job Location</th>
     <th>Salary</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["job_id"].'</td>
    <td>'.$row["job_name"].'</td>
    <td>'.$row["experience"].'</td>
    <td>'.$row["req_skill"].'</td>
    <td>'.$row["job_loc"].'</td>
    <td>'.$row["salary"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'No Job Found For You Try With Another Skill';
}
?>
