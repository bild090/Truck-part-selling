<?
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grille</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="wheels.css">
    <link rel="stylesheet" href="grille.css">
</head>
<body>

    <!-- Header -->
    <?php
        include 'header.php';
    ?>

    <!--grille header -->

    <div id="wheelsHeaderContainer">
        <div>
            <img id="SeiraaGrilleHeader" src="sierra img\grille header.jpg" alt="">
        </div>
    </div>


    <!-- grille -->
    <div class="font picPosition">
        <div style="text-align: left;">
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="sierra img/grille1.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">T-REX Laser Billet Series Upper <br> Grille Insert with Logo Insert;<br> Black
                                <br>(16-18 Sierra 1500)<br><strong class="price">$411.63</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="pic3Place">
                            <img src="sierra img/grille2.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">T-REX Upper Class Series Mesh <br>Upper Grille Insert; Polished
                                <br>(16-18 Sierra 1500)<br><strong class="price">$796.28</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="pic3Place">
                            <img src="sierra img/grille3.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">T-REX Stealth Metal Series Upper <br> Grille Insert; Black
                                <br>(16-18 Sierra 1500)<br><strong class="price">$851.23</strong></p>
                        </div>
                            
                    </div>
                </li>
               
               
                
            </ul>
            <!---------------------------2nd row--------------------------->
           
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="sierra img/grille4.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">T-REX Stealth Metal Series Upper <br> Grille Insert with 30-Inch LED <br> Light Bar; Black
                                <br>(16-18 Sierra 1500)<br><strong class="price">$1,510.63</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="pic3Place">
                            <img src="sierra img/grille5.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">T-REX Billet Series Upper <br> Grille Insert; Polished
                                <br>(16-18 Sierra 1500)<br><strong class="price">$411.63</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="pic3Place" >
                            <img src="sierra img/grille6.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">T-REX X-Metal Series Upper <br> Grille Insert; Black
                                <br>(16-18 Sierra 1500)<br><strong class="price">$818.26</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
            <!-----------------------------------3d row--------------------------------------------->
            <ul >
                <li>
                    <div class=" background container">
                        <div class="picPlace">
                            <img src="sierra img/grille7.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">T-REX Billet Series Upper <br> Grille Insert; Black
                                <br>(16-18 Sierra 1500)<br><strong class="price">$411.63</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="sierra img/grille8.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">T-REX X-Metal Series Upper <br> Grille Insert; Polished
                                <br>(16-18 Sierra 1500)<br><strong class="price">$818.26</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="picPlace">
                            <img src="sierra img/grille9.jfif" alt="">
                        </div>                  
                          
                        <div >
                            <p class="information text">T-REX Upper Class Series Mesh Upper <br> Grille Insert; Black
                                <br>(16-18 Sierra 1500)<br><strong class="price">$686.38</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
        </div>
    </div>
    
</body>
</html>