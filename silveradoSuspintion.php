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
    <title>Suspension</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="wheels.css">
    <link rel="stylesheet" href="grille.css">
</head>
<body>

    <!-- Header -->
    <?php
        include 'header.php';
    ?>

    <!--Suspension header -->

    <div id="wheelsHeaderContainer">
        <div>
            <img id="grilleHeader" src="img\grille header.jpg" alt="">
        </div>
    </div>


    <!-- Suspension -->
    <div class="font picPosition">
        <div style="text-align: left;">
            <ul >
                <li>
                    <div class=" background container">
                        <div class="moveUp">
                            <img src="seliverado img/s1.jfif" alt="">
                        </div>
                        <div >
                            <p class="information" id="Wheels">Zone Offroad 4.50-Inch Suspension <br> Lift Kit with Nitro Shocks
                                <br>(14-18 4WD Silverado 1500)<br><strong class="price">$1,209.59</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="seliverado img/s2.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Rough Country 5-Inch Knuckle <br> Suspension Lift Kit with Lifted<br> Struts and Premium N3 Shocks
                               <br> (14-18 4WD Silverado 1500 <br> w/ Stock Cast Steel Control Arms)<br><strong class="price">$1,399.95</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="moveUp">
                            <img src="seliverado img/s3.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information ">Zone Offroad 6.50-Inch <br> Suspension Lift Kit with Shocks
                                <br>(14-18 4WD Silverado 1500)<br><strong class="price">$1,209.59</strong></p>
                        </div>
                            
                    </div>
                </li>
               
               
                
            </ul>
            <!---------------------------2nd row--------------------------->
           
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="seliverado img/s4.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">ICON Vehicle Dynamics 1 to <br> 3-Inch Suspension Lift System;<br> Stage 3
                                <br>(07-18 Silverado 1500)<br><strong class="price">$3,129.80</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="pic3Place">
                            <img src="seliverado img/s5.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">ICON Vehicle Dynamics 1 to 3-Inch <br> Suspension Lift System; Stage 1
                                <br>(07-18 Silverado 1500)<br><strong class="price">$1,719.85</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="pic3Place" >
                            <img src="seliverado img/s6.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Rough Country Adjustable Vertex <br> Front Coil-Overs for 6 to <br> 7.50-Inch Lift
                                <br>(07-18 Silverado 1500)<br><strong class="price">$999.95</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
            <!-----------------------------------3d row--------------------------------------------->
            <ul >
                <li>
                    <div class=" background container">
                        <div class="picPlace">
                            <img src="seliverado img/s7.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Supreme Suspensions 2-Inch Hub <br> and Wheel Centric Wheel <br> Spacers; Black
                                <br>(99-20 Silverado 1500)<br><strong class="price">$144.95</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="seliverado img/s8.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Supreme Suspensions 1.50-Inch Wheel <br> Spacers; Black
                                <br>(99-20 Silverado 1500)<br><strong class="price">$139.95</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="picPlace">
                            <img src="seliverado img/s9.jfif" alt="">
                        </div>                  
                          
                        <div >
                            <p class="information text">Supreme Suspensions 3-Inch Pro <br> Billet Front Strut Spacer <br> Leveling Kit
                                <br>(07-18 Silverado 1500)<strong class="price">$94.95</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
        </div>
    </div>
    
</body>
</html>