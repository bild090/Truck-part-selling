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
            <img id="wheelsHeader" src="img\Wheel header1.jpg" alt="">
        </div>
    </div>


    <!-- filter -->
    <div class="font picPosition">
        <div style="text-align: left;">
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="img/filter1.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">S&B Cold Air Intake <br> with Dry Extendable Filter
                                <br>(15-17 5.0L F-150)<br><strong class="price">$299.00</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="img/filter2.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">AFE Magnum FLOW Pro DRY <br> S Replacement Air Filter <br>
                                (09-20 F-150)<br><strong class="price">$80.00</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="picPlace">
                            <img src="img/filter3.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">S&B Cold Air Intake with <br> Oiled Cleanable Cotton Filter
                                <br>(15-17 3.5L EcoBoost F-150,<br> Excluding Raptor)<br><strong class="price">$299.00</strong></p>
                        </div>
                            
                    </div>
                </li>
               
               
                
            </ul>
            <!---------------------------2nd row--------------------------->
           
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="img/filter4.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">S&B Cold Air Intake with <br> Oiled Cleanable Cotton Filter
                                <br>(18-20 5.0L F-150)<br><strong class="price">$299.00</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="img/filter5.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">S&B Cold Air Intake with Oiled <br> Cleanable Cotton Filter
                                <br>(15-17 5.0L F-150)<br><strong class="price">$299.00</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div >
                            <img src="img/filter6.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">K&N Drop-In Replacement <br> Air Filter
                                <br>(09-20 F-150)<br><strong class="price">$54.99</strong></p>
                        </div>         
                    </div>
                </li>          
            </ul>
            <!-----------------------------------3d row--------------------------------------------->
            <ul >
                <li>
                    <div class=" background container">
                        <div class="firstElement">
                            <img src="img/filter7.jfif" alt="">
                        </div>
                        <div>
                            <p class="information" id="Wheels">Airaid MXP Series Cold Air <br>Intake with SynthaMax Dry Filter
                                <br>(15-20 5.0L F-150)<br><strong class="price">$429.51</strong></p> 
                        </div> 
                           
                    </div>
                </li>
                <li>
                    <div class="background container">
                        <div class="picPlace">
                            <img src="img/filter8.jfif" alt="" >
                        </div>
                        <div>
                            <p class="information" id="Lights">S&B Cold Air Intake with <br> Oiled Cleanable Cotton Filter
                                <br>(18-20 3.5L EcoBoost F-150,<br>Excluding Raptor)<br><strong class="price">$299.00</strong></p>
                        </div>    
                           
                    </div>
                </li>
                <li>
                    <div class="background container">  
                        <div class="GrillePlace">
                            <img src="img/filter9.jfif" alt="" >
                        </div>                  
                          
                        <div >
                            <p class="information text">Airaid MXP Series Cold Air Intake<br> with Red SynthaFlow Oiled Filter
                                <br>(15-20 5.0L F-150)<br><strong class="price">$421.27</strong></p>
                        </div>
                            
                    </div>
                </li>          
            </ul>
        </div>
    </div>
    
</body>
</html>