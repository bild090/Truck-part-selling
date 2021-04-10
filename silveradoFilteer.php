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
    <title>Filter</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="wheels.css">
</head>
<body>

    <!-- Header -->
    <?php
        include 'header.php';
    ?>

    <!--filter header -->

    <div id="wheelsHeaderContainer">
        <div>
            <img id="wheelsHeader" src="seliverado img\silverado header.jpg" alt="">
        </div>
    </div>


    <!-- filter -->
    <div class="font picPosition">
        <div style="text-align: left;">
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="seliverado img/filter1.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">S&B Cold Air Intake with Oiled <br> Cleanable Cotton Filter
                                <br>(14-16 5.3L Silverado 1500)<br><strong class="price">$299.00</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="seliverado img/filter2.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">S&B Cold Air Intake with Oiled <br> Cleanable Cotton Filter
                                <br>(17-18 5.3L Silverado 1500)<br><strong class="price">$299.00</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="picPlace">
                            <img src="seliverado img/filter3.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">S&B Cold Air Intake with <br> Dry Extendable Filter
                               <br> (14-16 5.3L Silverado 1500)<br><strong class="price">$299.00</strong></p>
                        </div>
                            
                    </div>
                </li>
               
               
                
            </ul>
            <!---------------------------2nd row--------------------------->
           
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="seliverado img/filter4.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Corsa Closed Box Cold Air <br> Intake with DryTech <br> 3D Dry Filter
                                <br>(14-18 5.3L Silverado 1500)<br><strong class="price">$339.90</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="seliverado img/filter5.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">Corsa Closed Box Cold Air <br> Intake with MaxFlow 5 <br> Oiled Filter
                                <br>(14-18 5.3L Silverado 1500)<br><strong class="price">$329.90</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div >
                            <img src="seliverado img/filter6.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Corsa Closed Box Cold Air <br> Intake with DryTech <br> 3D Dry Filter
                                <br>(14-18 6.2L Silverado 1500)<br><strong class="price">$339.90</strong></p>
                        </div>         
                    </div>
                </li>          
            </ul>
            <!-----------------------------------3d row--------------------------------------------->
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="seliverado img/filter7.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">K&N Drop-In Replacement <br> Air Filter
                               <br>(07-18 Silverado 1500)<br><strong class="price">$50.99</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="seliverado img/filter8.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">AEM DryFlow Replacement <br> Air Filter
                                <br>(99-18 Silverado 1500)<br><strong class="price">$40.99</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="GrillePlace">
                            <img src="seliverado img/filter9.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">AFE Magnum FLOW Pro DRY S <br> Replacement Air Filter
                                <br>(07-18 Silverado 1500)<br><strong class="price">$69.00</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
        </div>
    </div>
    
</body>
</html>