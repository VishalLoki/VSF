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
$em=$_GET["email"];
$r1=$conn->query("select * from sdet where email='$em'");
if($r1->num_rows >0)
{
    while($row = $r1->fetch_assoc())
    {
        $f_name=$row["f_name"];
        $l_name=$row["l_name"];
        $email=$row["email"];
        $dob=$row["dob"];
        $gender=$row["gender"];
        $phno=$row["phno"];
        $fa_name=$row["fa_name"];
        $occu=$row["occu"];
        $income=$row["income"];
        $course=$row["course"];
        $year=$row["year"];
        $i_name=$row["i_name"];
        $location=$row["location"];
    }
}
echo "<title>application-overview</title>
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
    .vision
    {
        background-color: rgb(0, 173, 253);
        overflow:hidden;
    }
    .vision h2
    {
        color: white;
        font-family: 'Times New Roman', Times, serif;
    }
    .vision p
    {
        color: white;
        font-size:12px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .vision h4
    {
        color: white;
        font-family: 'Times New Roman', Times, serif;
        font-size:30px;
    }
    .sim
            {
                padding-top: 20px;
            }
            .sim ul
            {
                padding-left: 170px;
            }
            .sim li
            {
                font-size: 20px;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-weight: 200;
            }
            .sim h2
            {
                font-family: 'Times New Roman', Times, serif;
                font-size: 40px;
                color:rgb(0, 173, 253);
                font-style: italic;
            }
            .sim h4
            {
                font-family: 'Times New Roman', Times, serif;
                font-size: 25px;
                color:rgb(0, 173, 253);
                font-style: italic;
            }
            .cno
            {
                display: flex;
                justify-content: center;
                padding-top: 0px;
                padding-bottom: 50px;
                padding-left:800px;
                padding-right:300px;
            }
            .cno .wno
            {
                padding-left: 500px;
            }
            .cno .ilo
            {
                float:right;
                padding-left:80px;
            }
            .cno .llo
            {
                float:right;
                padding-left:80px;
                padding-right:500px;
            }
            .bonn
            {
                padding-top:20px;
            }
            .bonn p
            {
               color:rgb(0, 173, 253);
               font-size:12px;
               font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
            .bonn h2
            {
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-size: 30px;
                color:rgb(0, 173, 253);
            }
            .bonn button
            {
                max-width:600px;
                max-height:100px;
                background-color: rgb(0, 173, 253);
                padding: 10px;
                border: none;
                border-radius: 5px;
            }
            .bonn button a
            {
                font-family: 'Times New Roman', Times, serif;
                font-size:35px;
                color: white;
                font-style: italic;
                text-decoration: none;
            }
            .new
            {
                padding-top: 40px;
                padding-left:150px;
                padding-right:150px;
            }
            .new .rig
            {
                padding-left: 700px;   
            }
            .new .lef
            {
                padding-left: 50px;
            }
            .new h3
            {
                font-family: 'Times New Roman', Times, serif;
                font-size:30px;
                color:  rgb(0, 173, 253);
            }
            .new p
            {
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-size: 20px;
                color: black;
            }
    </style>
    </head>";
    echo "<div class='navbar'>
    <div class='logo'><a href='https://vishalloki.github.io/VSF/web/schindex.html'>Vishy Scholarship Foundation</a></div>
    <ul>
        <li><a href='https://vishalloki.github.io/VSF/web/schindex.html'>HOME</a></li>
        <li><a href='https://vishalloki.github.io/VSF/web/schabout.html'>ABOUT</a></li>
        <li><a href='https://vishalloki.github.io/VSF/web/schcontact.html'>CONTACT US</a></li>
        <li><a href='https://vishalloki.github.io/VSF/web/schlogin.html'>LOGIN</a></li>
        <li><a href='https://vishalloki.github.io/VSF/web/schsign.html'>SIGNUP</a></li>
    </ul>
</div><br><br><br><br>";
echo "<center><div class='vision'>
      <h4>Application</h4>
      </div></center>";
echo "<div class='new'>
          <div class='lef'><h3>Name : </h3><p>" .$f_name." " .$l_name ."</p></div>
          <div class='rig'><h3>Email: </h3><p>" .$email ."</p></div>
          <div class='lef'><h3>Date-of-Birth: </h3><p>" .$dob ."</p></div>
          <div class='rig'><h3>Gender: </h3><p>" .$gender ."</p></div>
          <div class='lef'><h3>Phone Number: </h3><p>" .$phno ."</p></div>
          <div class='rig'><h3>Father's Name: </h3><p>" .$fa_name ."</p></div>
          <div class='lef'><h3>Father's Occupation: </h3><p>" .$occu ."</p></div>
          <div class='rig'><h3>Income: </h3><p>" .$income ."</p></div>
          <div class='lef'><h3>Course: </h3><p>" .$course ."</p></div>
          <div class='rig'><h3>Year: </h3><p>" .$year ."</p></div>
          <div class='lef'><h3>Institute's Name: </h3><p>" .$i_name ."</p></div>
          <div class='rig'><h3>Location: </h3><p>" .$location ."</p></div>
      </div>";
echo "<center>
<div class='bonn'>
    <p>***********this can't be editable************</p><br><br><br>
    <button><a href='https://vishalloki.github.io/VSF/web/schindex.html'>Return Home</a></button>
</div><br><br><br><br>
<div class='vision'>
    <h2>Contact Us</h2>
    <p>Follow us on social media to know the upcoming scholarships</p>
</div>
<div class='sim'>
    <h4>Contact Us</h4>
</div>
</center>
<div class='cno'>
<div class='wlo'>
<a href='http://wa.me/918124390345' target='_blank'><img src='https://vishalloki.github.io/VSF/images/whatsapp.png' class='logo' alt='whatsapp'></a>
</div>
<div class='ilo'>
<a href='https://www.instagram.com/loki_var_007/' target='_blank'><img src='https://vishalloki.github.io/VSF/images/instagram.png' class='logo' alt='instagram'>
</div>
<div class='llo'>
<a href='https://www.linkedin.com/in/vishal-n-b72603252' target='_blank'><img src='https://vishalloki.github.io/VSF/images/linkedin.png' class='logo' alt='linkedin'>
</div>
</div>";
$conn->close();
?>