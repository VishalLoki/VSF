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
echo "<title>Application Submission</title>
<link rel='icon' href='https://vishalloki.github.io/VSF/logo/logo.jpg'>
<style>
    .body
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
</div><br><br><br><br><center>";
    echo "<div class='bonn'><h2>Application Already Submitted</h2><button><a href='profile.php?email=$email'>View Application</a></button><div></center>";
    echo "<br><br><br><br><center>
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