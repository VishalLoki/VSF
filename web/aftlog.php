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
$email=$_GET["email"];
$s1=$conn->query("select email from sdet where email='$email'");
if($s1->num_rows> 0)
{
    while($row=$s1->fetch_assoc())
    {
        $s2=$row["email"];
    }
}
if(!isset($s2))
{
    header("Location: appform.html");
    exit;
}
else
{
    header("Location: aftapp.php?email=$email");
    exit;
}
$conn->close();
?>