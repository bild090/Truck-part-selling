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
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="F150.css">
    <title>F150</title>
</head>
<body>

    <!-- Header -->
    <?php
        include 'header.php';
    ?>

    <!-- parts -->
    <div class="Parts picPosition">
        <div style="text-align: left;">
            <ul >
                <li>
                    <div class="firstElement PartsHover">
                        <a href="seiraaWheels.php">
                            <img class="imgPart " src="sierra img/wheel2.jfif" alt="" >
                            <p class="firstElement" id="Wheels">Wheels</p> 
                        </a>
                    </div>
                </li>
                <li>
                    <div class="picPlace PartsHover">
                        <a  href="sierraLight.php">
                            <img class="imgPart " src="sierra img/light.jpg" alt="" >
                            <p class="partsName" id="Lights">Lights</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="GrillePlace PartsHover">
                        <a  href="seiraaGrille.php">
                            <img class="imgPart " src="img/grill.jpg" alt="" >
                            <p class="partsName" id="Grille">Grille</p>
                        </a>
                    </div>
                </li>
               
                
            </ul>

            <ul>
                <li>
                    <div class="firstElement PartsHover">
                        <a  href="suspension.php">
                            <img class="imgPart " src="img/susp.jpg" alt="" >
                            <p class="firstElement" id="Suspension">Suspension</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="picPlace PartsHover">
                        <a  href="">
                            <img class="imgPart " src="img/outParts.jpg" alt="">
                            <p class="partsName" id="exteriorParts">Exterior parts</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="picPlace PartsHover">
                        <a  href="filter.php">
                            <img class="imgPart " src="img/filter.jpg" alt="" >
                            <p class="partsName" id="Engine">Filter</p>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>