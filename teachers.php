
<!DOCTYPE html>
<html>
<head>
 <title>Map</title>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="css/teachers.css" type="text/css" />
 <script src="files/myscripts.js" defer></script> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="/assets/dcode.css">
    <link rel="stylesheet" href="css/Keyboard.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>
 <?php
    include "header.php";
 ?>

 <body>
 <div class="search-cont">
    <div class="search-wrapper">
        <form id="inputForm">
          <h1><?php echo($header['search']);?></h1>
          <input id="search" type="search" placeholder="Search" class="use-keyboard-input"  data-search>
          <input type="submit" value="<?php echo($header['submit']);?>" id="sub" style="  height: 50px; width: 50px;" data-button>
        </form>
    </div>
    <div class="user-cards" data-user-cards-container> </div>
    <div class="datas">
        <template data-user-template>
            <div class="card">   
              <h3> <div class="head" data-header>  </div><br></h3>
            <div class="bod" data-body></div><br>
             <div class="telephone" data-telephone></div><br>
            <div class="classroom" data-classroom></div><br>
             <div class="day" data-day></div><br>
        </div>
        </template>
    </div> 
</div>
<script src="files/keyboard.js"></script>
<?php
    include "footer.php";
?>
</body>
</html>
