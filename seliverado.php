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
    <title>Silverado</title>
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
                        <a href="silveradoWheels.php">
                            <img class="imgPart " src="seliverado img/wheels.jpg" alt="" >
                            <p class="firstElement" id="Wheels">Wheels</p> 
                        </a>
                    </div>
                </li>
                <li>
                    <div class="picPlace PartsHover">
                        <a  href="silveradoLight.php">
                            <img class="imgPart " src="seliverado img/light.jfif" alt="" >
                            <p class="partsName" id="Lights">Lights</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="GrillePlace PartsHover">
                        <a  href="silveradoGrille.php">
                            <img class="imgPart " src="seliverado img/grille7.jfif" alt="" >
                            <p class="partsName" id="Grille">Grille</p>
                        </a>
                    </div>
                </li>
               
                
            </ul>

            <ul>
                <li>
                    <div class="firstElement PartsHover">
                        <a  href="silveradoSuspintion.php">
                            <img class="imgPart " src="seliverado img/s6.jfif" alt="" >
                            <p class="firstElement" id="Suspension">Suspension</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="picPlace PartsHover">
                        <a  href="silveradoFender.php">
                            <img class="imgPart " src="seliverado img/fender4.jfif" alt="">
                            <p class="partsName" id="exteriorParts">Fender Flares</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="picPlace PartsHover">
                        <a  href="silveradoFilteer.php">
                            <img class="imgPart " src="seliverado img/filter icon.jfif" alt="" >
                            <p class="partsName" id="Engine">Filter</p>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>