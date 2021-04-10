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
                        <a href="wheels.php">
                            <img class="imgPart " src="img/wheels.jpg" alt="" >
                            <p class="firstElement" id="Wheels">Wheels</p> 
                        </a>
                    </div>
                </li>
                <li>
                    <div class="picPlace PartsHover">
                        <a  href="lights.php">
                            <img class="imgPart " src="img/lights.jpg" alt="" >
                            <p class="partsName" id="Lights">Lights</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="GrillePlace PartsHover">
                        <a  href="grille.php">
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
                        <a  href="fender.php">
                            <img class="imgPart " src="img/fender.jfif" alt="">
                            <p class="partsName" id="exteriorParts">Fender Flares</p>
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