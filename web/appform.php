<?php
$servername="localhost";
$username="root";
$password="";
$dbname="vishal";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection Failed:" .$conn->connect_error);
}
$f_name=$_POST["f_name"];
$l_name=$_POST["l_name"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$phno=$_POST["phno"];
$fa_name=$_POST["fa_name"];
$occu=$_POST["occu"];
$income=$_POST["income"];
$course=$_POST["course"];
$year=$_POST["year"];
$i_name=$_POST["i_name"];
$location=$_POST["location"];
$sql=$conn->query("insert into sdet(f_name, l_name, email, dob, gender, phno, fa_name, occu, income, course, year, i_name, location) values('$f_name','$l_name','$email','$dob','$gender',$phno,'$fa_name','$occu','$income','$course','$year','$i_name','$location')");
if($sql===TRUE)
{
    header("Location: profile.php?email=$email");
    exit;
}
$conn->close()
?>