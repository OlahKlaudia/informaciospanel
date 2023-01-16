<html>
<head>
    <title>Információs panel</title>
    <link rel="stylesheet" href="css/style.css">
<style>
    .welcome-contener{
    width: 1080px;
    height: 100%;
    background-image: url("images/back2.jpg");
    background-repeat: no-repeat;
    margin-top: 15px;
    cursor: none;
}
    </style>
</head>
<body>
    <div class="welcome-contener">  
    <div class="cont">

    <img class="logo-image" src="images/vts.jpg" alt="logo">
  <p id="welcome">   Üdvözöllek a VTS-n. Ha még nem jártál itt, mi segítünk hogy könnyen eltájékozódj.<br></p>
  <p id="welcome"> Welcome to VTS. If you haven't been here yet, we'll help you find your way around easily. <br></p>
  <p id="welcome">  Dobrodošli u VTS.  Ako još niste bili ovde, pomoći ćemo vam da se lakše snađete. </p>

</div>
</div>
<?php 
     header("refresh:5; url=map.php"); 
    ?> 
</body>
</html>