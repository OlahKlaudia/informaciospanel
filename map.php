<!DOCTYPE html>
<html>
<head>
 <title>Információs panel</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <link rel="stylesheet" href="css/mymap.css" type="text/css" /> 
 <link rel="shortcut icon" href="/assets/favicon.ico">

    <link rel="stylesheet" href="css/Keyboard.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <style>
   #input-form{
	margin-top: 70px;
   margin-left:20px;
   }
   #sub, button, #reset{
      padding:5px;
      background-color:#0093DD;
      color: #fff;
   } 
   #input{
      height:20%;
   }
   #room, #floor,#floor-canvas{
      margin-left:20px;  
   }
   .container{
    height: 50%;
    width: 1080px;
    padding: 10px;
    background-color: #0093DD;
    margin-top: 1920px; 
}
   </style>
</head>
 <body>
   <?php
      include "header.php";
   ?>
  <form id="input-form">
  <h1><?php echo($header['mapSearch']);?></h1>
  <small><?php echo($header['forRoom']);?><br> <?php echo($header['forRef']);?> 'referada'. <br><?php echo($header['forPar']);?> 'parlament'.</small><br>
    <label for="input"></label>
    <input id="input" type="text" class="use-keyboard-input" style="  height: 50px; width: 300px;">

    <input type="submit" value="<?php echo($header['submit']);?>" id="sub">
    <button type="button" id="reset"><?php echo($header['reset']);?></button>
  </form>

  <p id="floor"><?php echo($header['floor']);?>: -</p>
  <p id="room"><?php echo($header['room']);?>: -</p>

  <canvas id="floor-canvas"></canvas>

  <script src="files/js.js" type="module"></script>
  <script src="files/keyboard.js"></script>
  <?php
    include "footer.php";
   ?>
 </body>
</html>