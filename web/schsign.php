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
$e=$_POST["email"];
$p1=$_POST["pswd1"];
$p2=$_POST["pswd2"];
$em=$conn->query("select email from logg where email='$e'");
if($em->num_rows >0)
{
    while($row = $em->fetch_assoc())
    {
       $email=$row["email"];
    }
}
echo "<title>Error in signup</title>
<link rel='icon' href='https://vishalloki.github.io/VSF/logo/logo.jpg'>
<style>
    body
    {
        font-family:Arial, Helvetica, sans-serif;
        margin:0;
        padding:0;
    }
    .navbar
    {
        background-color: rgb(0, 173, 253);
        overflow:hidden;
    }
    .navbar .logo a
    {
        display: flex;
        margin:0;
        padding-left: 150px;
        color:white;
        font-family:'Times New Roman', Times, serif;
        font-style: italic;
        font-size: 36px;
        text-align: center;
        text-decoration: solid;
        float:left;
    }            
    .navbar ul
    {
        list-style-type: none ;
        margin:0;
        padding:0;
        float:right;
    }
    .navbar li
    {
        float:left;
        border-left: 1px solid white;
    }
    .navbar li a
    {
        display: block;
        color:white;
        text-align: center;
        padding: 12px 12px;
        text-decoration:solid
        ;
    }
    .navbar li a:hover
    {
        background-color: white;
        color:rgb(0, 173, 253);
    }
    </style>
      </head>";
    echo "<div class='navbar'>
    <div class='logo'><a href='schindex.html'>Vishy Scholarship Foundation</a></div>
    <ul>
        <li><a href='schindex.html'>HOME</a></li>
        <li><a href='schabout.html'>ABOUT</a></li>
        <li><a href='schcontact.html'>CONTACT US</a></li>
        <li><a href='schlogin.html'>LOGIN</a></li>
        <li><a href='schsign.html'>SIGNUP</a></li>
    </ul>
</div><br><br><center>";
if($p1!=$p2)
{
    die("<h3>Error Occured</h3><h4>Entered Password is not as same as Confirmed Password</h4>");
}
elseif(isset($email))
{
    die("<h3>Error Occurred</h3><h4>Already you have an account in this Email!!!</h4>");
}
else
{
    $sql=$conn->query("insert into logg values('$e','$p1')");
    if($sql==TRUE)
    {
        header("Location: schlogin.html");
        exit;
    }
    else
    {
        die("<h3>Error Occurred</h3><h4>Already you have an account in this Email!!!</h4>");
    }
}
echo "</center>";
$conn->close();
?>