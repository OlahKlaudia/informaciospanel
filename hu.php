<html>
<head>
    <title>Információs panel</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <style>
 #lg{
    width: 15px;
    height: 15px;
    display:grid;
    padding: 2px 0px;
    position: relative;
    list-style-type: none;
    display: inline-block;
    cursor: pointer;
}

</style>
</head>
<body>


<div class="header">
<div class="navbar-LANGUAGE" id="navbar">
     <ul>
         <li class="nav-item" name="terkep"><a class="nav-link" href="c.php" >TÉRKÉP</a></li>
         <li class="nav-item" name="tanarokjelenlete"><a class="nav-link" href="teachers.php">TANÁROK JELENLÉTE</a></li>
         <li class="nav-item" name="eref"><a class="nav-link" href="eref.php">EREF</a></li>
         <li class="nav-item" name="osztondij"><a class="nav-link" href="scholership.php">ÖSZTÖNDÍJAK</a></li>     
         
         <a class="nav-link"  href="map.php?lang=hu"><img id="lg"  src="images/magyar.png" alt="lang"></a>
         <a class="nav-link"  href="map.php?lang=eng"> <img id="lg" src="images/angol.png" alt="lang"></a>
         <a class="nav-link" href="map.php?lang=srb"><img id="lg" src="images/szerb.png" alt="lang"></a> 
    </div>
</div>


</body>
</html>