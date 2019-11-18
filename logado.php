<?php

session_start();


echo "<br /> <div style='font-size:30px;'>Seja bem-vindo ".$_SESSION['login_username']."</div>";

echo "<br /><a style=\"text-decoration:none;\" alt=\"adm\" href=\"admin.php\"><button style=\"font-size: 20px;
color:black;
height: 30px;
width: 400px;
border-radius: 30px;
margin:5px 0px 5px 0px;
padding: 5px 5px;
background-color:  rgba(32, 124, 67, 0.5);
justify-content: left;
text-align: center;\" type=\"button\">
<span >Seção administrativa</span></button></a>";

echo "<br /><a style=\"text-decoration:none;\" alt=\"adm\" href=\"login.php?act=logoff\"><button style=\"font-size: 20px;
color:black;
height: 30px;
width: 400px;
border-radius: 30px;
margin:5px 0px 5px 0px;
padding: 5px 5px;
background-color:  rgba(32, 124, 67, 0.5);
justify-content: left;
text-align: center;\" type=\"button\">
<span >Logoff</span></button></a>";
