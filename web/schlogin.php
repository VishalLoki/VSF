<?php
$servername="localhost";
$username="root";
$password="";
$dbname="vishal";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed" .$conn->connect_error);
}
$e=$_POST["email"];
$p=$_POST["pswd"];
echo "<head>
<title>Scholars</title>
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
            .lef
            {
                display:flex;
                justify-content: center;
                padding-top:80px;
                padding-left:200px;
                padding-bottom: 50px;
            }
            .lef .text_l
            {
                float:right;
                padding-right: 200px;
                padding-left:90px;
            }
            .lef .text_l b
            {
                font-size: 25px;
                font-family:'Times New Roman', Times, serif;
                font-weight: 200;
                font-style:italic;
                color:rgb(0, 173, 253);
            }
            .lef .text_l p
            {
                font-size: 20px;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-weight: 200;
            }
            .lef img
            {
                width:250px;
                height:250px;
                border-top:4px solid rgb(0, 173, 253);
                border-left:4px solid rgb(0, 173, 253);
            }
            .rig
            {
                display:flex;
                justify-content: center;
                padding-top:80px;
                padding-right:200px;
                padding-bottom: 50px;
            }
            .rig .text_l
            {
                padding-left: 200px;
                padding-right:90px;
            }
            .rig .text_l b
            {
                font-size: 25px;
                font-family:'Times New Roman', Times, serif;
                font-weight: 200;
                font-style:italic;
                color:rgb(0, 173, 253);
            }
            .rig .text_l p
            {
                font-size: 20px;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-weight: 200;
            }
            .rig img
            {
                float: right;
                width:250px;
                height:250px;
                border-top:4px solid rgb(0, 173, 253);
                border-right:4px solid rgb(0, 173, 253);
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
</div><br><br><center>";
$s1=$conn->query("select email from logg where email='$e'");
if($s1->num_rows >0)
{
    while($row=$s1->fetch_assoc())
    {
        $email=$row["email"];
    }
}
if(!isset($email))
{
    die("<h3>Error Occurred</h3><h1>Wrong Email or Password<h1>");
}
$s2=$conn->query("select pswd from logg where email='$email' and pswd='$p'");
if($s2->num_rows >0)
{
    while($row=$s2->fetch_assoc())
    {
        $pswd=$row["pswd"];
    }
}
if(!isset($pswd))
{
    die("<h3>Error Occurred</h3><h1>Wrong Email or Password<h1>");
}
echo "</center>";
echo "<center>
<div class='vision'>
    <h2>Our Scholars</h2>
    <p>The respective following scholars are placed in reputed companies</p>
</div><br><br>
<div class='sim'>
    <h2>Our Scholars</h2>
</div>
</center>
<div class='lef'>
    <img src='https://vishalloki.github.io/VSF/images/nat.jpg' class='photo' alt='vish'>
    <div class='text_l'>
        <b>Scarlett Johnson,Scholar</b>
        <p>Data Analysis Manager in an IT organization in India</p>
        <p>VSF showed me a great path towards my career. With the learnings, I am able to support myself financially. Strong technical knowledge, professional growth and behavioral development amongst so many because of VSF that I have in my life which follows me forever.</p>
    </div>
</div><br>
<div class='rig'>
    <div class='text_l'>
        <b>Chris Evans,Scholar</b>
        <p>Advanced Application Engineer at a Multinational Technology Company in India</p>
        <p>VSF has helped me grow in various aspects. It has helped not only financially but also helped build strong personality.  The Internship Program and trainings opportunities given by VSF really

            trained me well, increased my technical and interpersonal skills. These have helped me to stand</p>
    </div>
    <img src='https://vishalloki.github.io/VSF/web/ca.jpg' class='photo' alt='har'>
</div><br>
<div class='lef'>
    <img src='https://vishalloki.github.io/VSF/images/wanda.jpg' class='photo' alt='paduu'>
    <div class='text_l'>
        <b>Elizabeth Olsen,Scholar</b>
        <p>Specialist Engineer at World's Leading Mobile manufacturers in India</p>
        <p>VSF offered a lot of help while I was doing my studies - financially and also internships which enlightened my knowledge in the industries and technology. The Mechatronics Certification Program increased the scope during my Placement as a fresher. They imparted not only technical skills but also provided soft skills workshops which helped to groom my personalities. I am happy to be a part of VSF</p>
    </div>
</div><br>
<div class='rig'>
    <div class='text_l'>
        <b>Cillian Murphy,Scholar</b>
        <p>PGDIE student at NATIONAL INSTITUTE OF INDUSTRIAL ENGINEERING (NITIE)</p>
        <p>VSF has not only provided me with the financial support during my undergrad years, but also helped me develop my technical and interpersonal skills. I am presently pursuing my post graduate studies at National Institute of Industrial Engineering, Mumbai. The internship project and VSF's soft skills program helped me stand out among my peers, which helped me to get shortlisted for better companies and to land a summer internship at one of the best FMCG firms.</p>
    </div>
    <img src='https://vishalloki.github.io/VSF/images/cil.jpg' class='photo' alt='visw'>
</div><br>
<div class='lef'>
    <img src='https://vishalloki.github.io/VSF/images/thor.jpg' class='photo' alt='sak'>
    <div class='text_l'>
        <b>Chris Hemsworth,Scholar</b>
        <p>Grade A1 Officer at one of the biggest petroleum PSU in India.</p>
        <p>My journey with VSF has been fantastic and I am incredibly grateful for the opportunity. It's something that I'm proud of and I talk to friends about. I love the fact that we get to interact with people from all over India where we find a group which stays for lifetime. VSF started from my first year of Mechanical Engineering and continued for all four years. The trainings, mechatronics workshop and internships are the extraordinary segments of VSF.</p>
    </div>
</div><br>";
echo "<center><div class='bonn'><h2>Want to be a scholar,Click down!</h2><button><a href='aftlog.php?email=$email'>Application Form</a></button><div></center>";
echo "<br><br><br><br><br>";
echo " <center>
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