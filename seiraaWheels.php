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
            <img id="wheelsHeader" src="sierra img\Wheel header.jpg" alt="">
        </div>
    </div>


    <!-- Wheels -->
    <div class="font picPosition">
        <div style="text-align: left;">
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="sierra img/wheel1.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Moto Metal MO970 Gloss Black <br> Machined 6-Lug Wheel; 20x10;<br> -24mm Offset
                                <br>(14-18 Sierra 1500)<br><strong class="price">$219.00</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="sierra img/wheel2.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Pro Comp Wheels Inertia Satin <br>Black Milled 6-Lug Wheel; 17x9;<br> -6mm Offset
                                <br>(14-18 Sierra 1500)<br><strong class="price">$190.99</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="pic3Place">
                            <img src="sierra img/wheel3.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Pro Comp Wheels 01 Series Satin <br>Black 6-Lug Wheel; 17x9;<br>-6mm Offset
                                <br>(14-18 Sierra 1500)<br><strong class="price">$229.99</strong></p>
                        </div>
                            
                    </div>
                </li>
               
               
                
            </ul>
            <!---------------------------2nd row--------------------------->
           
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="sierra img/wheel4.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Pro Comp Wheels 69 Series Matte <br> Black 6-Lug Wheel; 17x9;<br> -6mm Offset
                               <br>(14-18 Sierra 1500)<br><strong class="price">$149.65</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="sierra img/wheel5.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Pro Comp Wheels 69 Series <br> Polished 6-Lug Wheel; 17x9;<br> -6mm Offset
                                <br>(14-18 Sierra 1500)<br><strong class="price">$135.99</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div >
                            <img src="sierra img/wheel6.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Black Rhino Arsenal Sand on <br> Black 6-Lug Wheel; 17x9.5;<br> -18mm Offset
                                <br>(14-18 Sierra 1500)<br><strong class="price">$228.80</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
            <!-----------------------------------3d row--------------------------------------------->
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="sierra img/wheel7.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Black Rhino Arsenal Textured Matte <br> Black 6-Lug Wheel; 17x9.5;<br> -18mm Offset
                                <br>(14-18 Sierra 1500)<br><strong class="price">$228.80</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="sierra img/wheel8.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Black Rhino Barstow Matte Bronze <br> with Matte Black Lip 6-Lug <br> Wheel; 17x9.5; -18mm Offset
                                <br>(14-18 Sierra 1500)<br><strong class="price">$228.80</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="GrillePlace">
                            <img src="sierra img/wheel9.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Black Rhino Everest Matte <br> Black 6-Lug Wheel; 24x10;<br> 25mm Offset
                                <br>(14-18 Sierra 1500) <br><strong class="price">$475.20</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
        </div>
    </div>
    
</body>
</html>