<html>
<head>
    <title>Információs panel</title>
    <link rel="stylesheet" href="css/header.css">
    </head>
<body>

<?php
session_start();
    $languages = array('eng', 'hu', 'srb');
    if(isset($_GET['lang']) AND in_array($_GET['lang'], $languages)){
        $_SESSION['lang'] = $_GET['lang'];
    }
    else {    
        $_SESSION['lang'] = "hu";    
    }
    require_once('language/'.$_SESSION['lang'].'.php');
 ?>

<div class="header">
<div class="navbar-LANGUAGE" id="navbar">
     <ul>
         <li class="nav-item" name="terkep"><a class="nav-link" href="map.php" ><?php echo($header['map']);?></a></li>
         <li class="nav-item" name="tanarokjelenlete"><a class="nav-link" href="teachers.php"><?php echo($header['teachers']);?></a></li>
         <li class="nav-item" name="eref"><a class="nav-link" href="eref.php"><?php echo($header['eref']);?></a></li>
         <li class="nav-item" name="osztondij"><a class="nav-link" href="scholership.php"><?php echo($header['schoolership']);?></a></li>     
         
         <a class="nav-link"  href="?lang=hu" ><img id="lg"  src="images/magyar.png" alt="lang"></a>
         <a class="nav-link"  href="?lang=eng"> <img id="lg" src="images/angol.png" alt="lang"></a>
         <a class="nav-link" href="?lang=srb"><img id="lg" src="images/szerb.png" alt="lang"></a> 
    </div>
</div>

</body>
</html>