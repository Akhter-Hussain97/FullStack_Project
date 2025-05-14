<?php
$server="localhost";
$servername="root";
$password="";
$dbname="gbdataform";
$con=mysqli_connect($server, $servername, $password, $dbname);
if(!$con){
    echo "Error Show ";
}
  if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=$_POST["username"];
  $fathername=$_POST["fathername"];
  $dateofbirth=$_POST["dateofbirth"];
  $cnic=$_POST["number"];
  $nationality=$_POST["nationality"];
  $phoneno=$_POST["phoneno"];
  $email=$_POST["email"];
  $gender=$_POST["gender"];
  $checkboxes = isset($_POST["checkbox"]) ? implode(", ", $_POST["checkbox"]) : "";
  $comment=$_POST["comment"];
  $sql="INSERT INTO `table_form`(`username`, `fathername`, `dateofbirth`, `cnic`, `nationality`, `phoneno`, `email`, `gender`, `checkbox`, `comment`) VALUES ('$username','$fathername','$dateofbirth','$cnic','$nationality','$phoneno','$email','$gender','$checkboxes','$comment')";
  $result=mysqli_query($con, $sql);
  if(!$result){
   die("Invalid Result:" .mysqli_connect_error());
  }
}
  ?>