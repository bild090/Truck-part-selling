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
                        <div class="firstElement">
                            <img src="img/s1.jfif" alt="">
                        </div>
                        <div >
                            <p class="information" id="Wheels">Rough Country 6-Inch Suspension Lift <br> Kit with Lifted Struts and <br> Premium N3 Shocks
                                <br>(15-20 4WD F-150 SuperCab,<br> SuperCrew, Excluding Raptor)<br><strong class="price">$1,399.95</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="moveUp">
                            <img src="img/s2.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Rough Country 6-Inch Suspension <br> Lift Kit with Shocks
                                <br>(15-20 2WD F-150)<br><strong class="price">$999.95</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="moveUp">
                            <img src="img/s3.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information ">Rough Country 6-Inch Suspension <br> Lift Kit with V2 Monotube Shocks
                                <br>(15-20 2WD F-150)<br><strong class="price">$1,199.95</strong></p>
                        </div>
                            
                    </div>
                </li>
               
               
                
            </ul>
            <!---------------------------2nd row--------------------------->
           
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="img/s4.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">ICON Vehicle Dynamics 0 to 3-Inch <br> Suspension Lift System; Stage 3
                                <br>(15-20 2WD F-150)<br><strong class="price">$3,129.80</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="pic3Place">
                            <img src="img/s5.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">ICON Vehicle Dynamics 0 to 3-Inch <br> Suspension Lift System; Stage 1
                                <br>(15-20 2WD F-150)<br><strong class="price">$1,719.85</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="moveUp" >
                            <img src="img/s6.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Eibach Pro-Truck Lift System;<br> Stage 1
                                <br>(15-20 F-150, Excluding Raptor)<br><strong class="price">$586.00</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
            <!-----------------------------------3d row--------------------------------------------->
            <ul >
                <li>
                    <div class=" background container">
                        <div class="moveUp">
                            <img src="img/s7.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Supreme Suspensions 1.50-Inch Pro <br> Billet Hub and Wheel Centric Wheel <br>  Spacers; Black; Set of Four
                                <br>(15-20 F-150)<br><strong class="price">$229.95</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="pic3Place">
                            <img src="img/s8.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Supreme Suspensions 2-Inch Pro <br> Billet Front Strut Spacer <br> Leveling Kit
                                <br>(04-20 2WD/4WD F-150,<br> Excluding Raptor)<br><strong class="price">$79.95</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="moveUp">
                            <img src="img/s9.jfif" alt="">
                        </div>                  
                          
                        <div >
                            <p class="information text">Supreme Suspensions 2-Inch Pro <br> Billet Hub and Wheel Centric <br> Wheel Spacers; Black; Set of Four
                                <br>(15-20 F-150)<br><strong class="price">$269.95</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
        </div>
    </div>
    
</body>
</html>