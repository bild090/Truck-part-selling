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

    <!--Fender header -->

    <div id="wheelsHeaderContainer">
        <div>
            <img id="wheelsHeader" src="img\fender header.jpg" alt="">
        </div>
    </div>


    <!-- Fender -->
    <div class="font picPosition">
        <div style="text-align: left;">
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="img/fender1.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">RedRock 4x4 Pocket Style Fender <br> Flares
                                <br>(15-17 F-150, Excluding Raptor)<br><strong class="price">$234.99</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="img/fender2.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Bushwacker Pocket Style Fender <br> Flares; Pre-Painted
                                <br>(15-17 F-150, Excluding Raptor) <br> <strong class="price">$799.00</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="picPlace">
                            <img src="img/fender3.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">RedRock 4x4 Bolt-On Look Fender <br> Flares; Color Matched
                                <br>(18-20 F-150, Excluding Raptor) <br><strong class="price">$534.99</strong></p>
                        </div>
                            
                    </div>
                </li>
               
               
                
            </ul>
            <!---------------------------2nd row--------------------------->
           
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="img/fender4.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">RedRock 4x4 Bolt-On Look Fender <br> Flares; Color Matched
                                <br>(15-17 F-150, Excluding Raptor)<br><strong class="price">$534.99</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="img/fender5.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Barricade Premium Molded Fender <br> Flares
                                <br>(15-17 F-150, Excluding Raptor) <br><strong class="price">$349.99</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div >
                            <img src="img/fender6.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">RedRock 4x4 OE Replacement Fender <br> Flares
                                <br>(15-17 F-150 w/ OE Fender Flares)<br><strong class="price">$119.99</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
            <!-----------------------------------3d row--------------------------------------------->
            <ul >
                <li>
                    <div class=" background container">
                        <div class="pic3Place">
                            <img src="img/fender7.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Rivet Pocket Fender Flares
                                <br>(18-20 F-150, Excluding Raptor)
                                <br><strong class="price">434.99</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="img/fender8.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Rough Country Pocket Style Fender <br> Flares; Flat Black
                                <br>(15-17 F-150, Excluding Raptor) <br><strong class="price">$299.95</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="pic3Place">
                            <img src="img/fender9.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Pocket Fender Flares; Raw
                                <br>(18-20 F-150, Excluding Raptor) <br><strong class="price">$302.99</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
        </div>
    </div>
    
</body>
</html>