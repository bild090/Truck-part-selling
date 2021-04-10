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
            <img id="wheelsHeader" src="img\Wheel header1.jpg" alt="">
        </div>
    </div>


    <!-- Wheels -->
    <div class="font picPosition">
        <div style="text-align: left;">
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="img/wheel1.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Fuel Wheels Assault Gloss<br> Black 6-Lug Wheel; 20x10;<br> -18mm Offset
                                (15-20 F-150)<br><strong class="price">$307.00</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="img/wheel2.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Fuel Wheels Vapor Matte Black<br> 6-Lug Wheel; 20x9;<br> 1mm Offset
                                (15-20 F-150)<br><strong class="price">$308.00</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="pic3Place">
                            <img src="img/wheel3.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">RTR Tech 6 Satin Black<br> 6-Lug Wheel; 17x9; 0mm Offset <br><strong class="price">$229.99</strong></p>
                        </div>
                            
                    </div>
                </li>
               
               
                
            </ul>
            <!---------------------------2nd row--------------------------->
           
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="img/wheel4.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Moto Metal MO962 Gloss Black <br>Milled 6-Lug Wheel; 20x9;<br> 0mm Offset
                                (15-20 F-150) <br><strong class="price">$252.00</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="img/wheel5.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">RTR Tech 6 Satin Black<br> 6-Lug Wheel; 20x9;<br> 18mm Offset
                                (15-20 F-150) <br><strong class="price">$359.99</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div >
                            <img src="img/wheel6.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Fuel Wheels Vapor Matte Black <br>6-Lug Wheel; 20x10;<br> -18mm Offset
                                (15-20 F-150) <br><strong class="price">$293.00</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
            <!-----------------------------------3d row--------------------------------------------->
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="img/wheel7.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Black Rhino Arsenal Textured <br>Matte Black 6-Lug Wheel; 17x9.5;<br> 12mm Offset(15-20 F-150) <br><strong class="price">$228.80</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="img/wheel8.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Black Rhino Glamis Matte<br> Black 6-Lug Wheel; 17x9; <br>12mm Offset
                                (15-20 F-150) <br><strong class="price">$193.60</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="GrillePlace">
                            <img src="img/wheel9.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Shelby CS45 Chrome Powder with<br> Black Inserts 6-Lug Wheel; 20x9; <br>12mm Offset
                                (15-20 F-150) <br><strong class="price">$333.86</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
        </div>
    </div>
    
</body>
</html>