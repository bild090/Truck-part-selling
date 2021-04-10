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
            <img id="silveradoGrilleHeader" src="seliverado img\grille header.jpg" alt="">
        </div>
    </div>


    <!-- grille -->
    <div class="font picPosition">
        <div style="text-align: left;">
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="seliverado img/grille1.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">T-REX Laser X-Metal Series Upper <br> Grille Insert; Black
                                <br>(16-18 Silverado 1500 <br> w/ Z71 Package)<br><strong class="price">$489.50</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="seliverado img/grille2.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">T-REX X-Metal Series Upper <br> Grille Inserts; Black
                                <br>(16-18 Silverado 1500 <br> w/ Z71 Package)<br><strong class="price">$647.91</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="pic3Place">
                            <img src="seliverado img/grille3.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">ZRoadz Upper Grille Insert with <br> 20-Inch LED Light Bar; Black
                                <br>(16-18 Silverado 1500)<br><strong class="price">$745.00</strong></p>
                        </div>
                            
                    </div>
                </li>
               
               
                
            </ul>
            <!---------------------------2nd row--------------------------->
           
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="seliverado img/grille4.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">T-REX X-Metal Series Upper <br> Grille Inserts; Polished
                                <br>(16-18 Silverado 1500 <br> w/ Z71 Package)<br><strong class="price">$689.50</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="pic3Place">
                            <img src="seliverado img/grille5.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">RBP RX-3 Series Studded <br> Frame Upper Grille Insert; Black
                                <br>(14-18 Silverado 1500)<br><strong class="price">$999.00</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="pic3Place" >
                            <img src="seliverado img/grille6.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">T-REX Upper Class Series Mesh <br> Lower Bumper Grille Inserts; Black
                                <br>(16-18 Silverado 1500)<br><strong class="price">$213.81</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
            <!-----------------------------------3d row--------------------------------------------->
            <ul >
                <li>
                    <div class=" background container">
                        <div class="picPlace">
                            <img src="seliverado img/grille7.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">T-REX Stealth Laser X-Metal Series <br> Upper Grille Insert; Black
                                <br>(16-18 Silverado 1500 <br> w/ Z71 Package)<br><strong class="price">$489.50</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="pic3Place">
                            <img src="seliverado img/grille8.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Smittybilt M1 Wire Mesh Upper <br> Grille Insert; Satin Black
                                <br>(16-18 Silverado 1500)<br><strong class="price">$403.99</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="pic3Place">
                            <img src="seliverado img/grille9.jfif" alt="">
                        </div>                  
                          
                        <div >
                            <p class="information text">T-REX Upper Class Series Mesh Lower <br> Bumper Grille Inserts; Polished
                                <br>(16-18 Silverado 1500)<br><strong class="price">$268.76</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
        </div>
    </div>
    
</body>
</html>