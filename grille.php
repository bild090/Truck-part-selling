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
            <img id="grilleHeader" src="img\grille header.jpg" alt="">
        </div>
    </div>


    <!-- grille -->
    <div class="font picPosition">
        <div style="text-align: left;">
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="img/grille1.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">RedRock 4x4 Baja Lower <br> Grille Insert; Charcoal
                                <br>(15-17 F-150, Excluding Raptor)<br><strong class="price">$69.99</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="img/grille2.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Punch Design Lower Bumper <br> Grille Insert; Black
                               <br>(15-17 F-150)<br><strong class="price">$131.99</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="picPlace">
                            <img src="img/grille3.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Bar Design Lower Bumper <br> Grille Insert; Black
                                <br>(15-17 F-150, Excluding Raptor)<br><strong class="price">$229.99</strong></p>
                        </div>
                            
                    </div>
                </li>
               
               
                
            </ul>
            <!---------------------------2nd row--------------------------->
           
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="img/grille4.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">T-REX Stealth Laser Torch Series <br> Lower Bumper Grille Insert with <br> 3-Inch LED Cube Lights; Black
                                <br>(18-20 2.7L/3.5L EcoBoost F-150,<br> Excluding Raptor)<br><strong class="price">$294.50</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="moveUp">
                            <img src="img/grille5.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">RedRock 4x4 Lower Bumper <br> Grille Insert; Polished
                                <br>(15-17 F-150, Excluding Raptor)<br><strong class="price">$51.99</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="moveUp" >
                            <img src="img/grille6.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">T-REX Billet Series Lower <br> Bumper Grille Insert; Black
                                <br>(15-17 F-150, Excluding Raptor)<br><strong class="price">$124.13</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
            <!-----------------------------------3d row--------------------------------------------->
            <ul >
                <li>
                    <div class=" background container">
                        <div class="moveUp">
                            <img src="img/grille7.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Punch Design Lower Bumper <br> Grille Insert; Stainless Steel
                                <br>(15-17 F-150, Excluding Raptor)<br><strong class="price">$116.99</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="pic3Place">
                            <img src="img/grille8.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">T-REX Billet Series Lower <br> Bumper Grille Insert; Black
                                <br>(18-20 2.7L/3.5L EcoBoost F-150,<br> Excluding Raptor)<br><strong class="price">$114.90</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="GrillePlace">
                            <img src="img/grille9.jfif" alt="">
                        </div>                  
                          
                        <div >
                            <p class="information text">T-REX Revolver Series Lower <br> Bumper Grille Insert with <br> 3-Inch LED Cube Lights; Black
                                <br>(18-20 2.7L/3.5L EcoBoost F-150,<br> Excluding Raptor)<br><strong class="price">$378.66</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
        </div>
    </div>
    
</body>
</html>