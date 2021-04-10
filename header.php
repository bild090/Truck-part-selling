<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(isset($_SESSION['loged']) && $_SESSION["loged"] == 1){
        echo'<div class="header">';
        echo'<div class="logo"><h2><a href="home.php">TRUCK</a></h2></div>';
        echo'<div class="minue">';
        echo'<ul>';
        echo'<li id="log-in-out"><a style="font-size:larger;" href="log out.php"> log out</a> </li>';
        echo'</ul>';
        echo'</div>';
        echo'</div>';
    }
    else{
        echo'<div class="header">';
        echo'<div class="logo"><h2><a href="home.php">TRUCK</a></h2></div>';
        echo'<div class="minue">';
        echo'<ul>';
        echo'<li id="log-in-out"><a style="font-size:larger;" href="login form.php"> log in</a> </li>';
        echo'</ul>';
        echo'</div>';
        echo'</div>';
        }
?>