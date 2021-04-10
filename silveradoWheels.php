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
    <title>Wheels</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="wheels.css">
</head>
<body>

    <!-- Header -->
    <?php
        include 'header.php';
    ?>

    <!--Wheels header -->

    <div id="wheelsHeaderContainer">
        <div>
            <img id="wheelsHeader" src="seliverado img\silverado header.jpg" alt="">
        </div>
    </div>


    <!-- Wheels -->
    <div class="font picPosition">
        <div style="text-align: left;">
            <ul >
                <li>
                    <div class=" background container">
                        <div class="picPlace">
                            <img src="seliverado img/wheels1.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Moto Metal MO970 Gloss Black <br> 6-Lug Wheel; 16x8; 0mm Offset
                                <br>(14-18 Silverado 1500)<br><strong class="price">$135.00</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="seliverado img/wheels2.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Moto Metal MO970 Gloss Black <br> 6-Lug Wheel; 17x8; 0mm Offset
                                <br>(14-18 Silverado 1500)<br><strong class="price">$174.00</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="picPlace">
                            <img src="seliverado img/wheels3.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Moto Metal MO970 Gloss Black <br> 6-Lug Wheel; 18x9; 18mm Offset
                                <br>(14-18 Silverado 1500)<br><strong class="price">$213.00</strong></p>
                        </div>
                            
                    </div>
                </li>
               
               
                
            </ul>
            <!---------------------------2nd row--------------------------->
           
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="seliverado img/wheels4.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Moto Metal MO970 Gloss Black <br> Machined 6-Lug Wheel; 20x10;<br> -24mm Offset
                                <br>(14-18 Silverado 1500)<br><strong class="price">$219.00</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="seliverado img/wheels5.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Fuel Wheels Maverick Matte Black <br> Milled 6-Lug Wheel; 18x9;<br> -12mm Offset
                                <br>(14-18 Silverado 1500)<br><strong class="price">$286.00</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="pic3Place">
                            <img src="seliverado img/wheels6.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Raceline Assault Black <br> 6-Lug Wheel; 20x9; 0mm Offset <br>
                                (14-18 Silverado 1500)<br><strong class="price">$246.60</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
            <!-----------------------------------3d row--------------------------------------------->
            <ul >
                <li>
                    <div class=" background container">
                        <div class="pic3Place">
                            <img src="seliverado img/wheels7.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Raceline Raptor Chrome <br> 6-Lug Wheel; 18x9; -6mm Offset
                                <br>(14-18 Silverado 1500)<br><strong class="price">$267.30</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="seliverado img/wheels8.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Fuel Wheels Assault Satin Black <br> Milled 6-Lug Wheel; 20x10;<br> -18mm Offset
                                <br>(14-18 Silverado 1500)<br><strong class="price">$341.00</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="pic3Place">
                            <img src="seliverado img/wheels9.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Fuel Wheels Assault Gloss Black <br> 6-Lug Wheel; 20x9; 1mm Offset
                                <br>(14-18 Silverado 1500)<br><strong class="price">$325.00</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
        </div>
    </div>
    
</body>
</html>