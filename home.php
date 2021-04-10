<?php
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
    <link rel="stylesheet" href="home.css">
    
    <title>Home</title>
</head>
<body>
    <!-- Header -->
    <?php
        include 'header.php';
    ?>

    <!-- car catogiry -->
    <div class="category">
        
    <div id="F150">
        <a href="F150.php"><img src="img/F150W.jpg" alt=" F150" style="width: 15%; height: 0%;padding: 2%;"><p>F150</p></a>
        
    </div>
    <div id="seirra">
        <a href="seiraa.php"><img src="img/sierraW.jpg" alt=" F150" style="width: 15%; height: 0%;padding: 2%;"><p>Seiraa</p></a>
        
    </div>
    <div id="silverad">
        <a href="seliverado.php"><img src="img/silveradoW.jpg" alt=" F150" style="width: 12%; height: 0%;padding: 2%;"><p>Silverado</p></a>
        
    </div>
    </div>
    
     <!-- Border-->
     <div class="dividingLine" style="margin-bottom: 0;"></div>

     <div class="shopping">
       <h1>Who wants to know more</h1>
       <a href="https://www.ford.com/trucks/f150/"><h1>F150</h1></a>
       <a href="https://www.gmc.com/trucks/sierra/1500"><h1>Seirra</h1></a>
       <a href="https://www.chevrolet.com/trucks/silverado/1500"><h1>Silverado</h1></a>
     </div>
    
    <!-- Border-->
    <div class="dividingLine"></div>
    <!-- about us -->
</body>
</html>