
<!DOCTYPE html>
<html>
<head>
 <title>Map</title>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="css/teachers.css" type="text/css" />
 <script src="files/myscripts.js" defer></script> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 </head>
 <?php
    include "header.php";
 ?>

 <body>
 <div class="search-cont">
    <div class="search-wrapper">
        <h1>Keresés:</h1>
        <input id="search" type="search" placeholder="Search" data-search>
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
<?php
    include "footer.php";
?>
</body>
</html>
