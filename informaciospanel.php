
<!DOCTYPE html>
<html>
<head>
 <title>Információs panel</title>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="css/mymap.css" type="text/css" />
 <script src="files/TeacherAndTerem.js" defer></script> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />

 </head>
 <?php
    include "header.php";
    ?>
 <body>
 <div class="search-cont">
    <div class="search-wrapper">
        <h3>Tanárok termének keresése:</h3>
        <input id="search" type="search" placeholder="Search" data-search>
        <input type=button onClick=move() value='move' id="btn_reset">
    </div>
    <div class="user-cards" data-user-cards-container> </div>

    <div class="datas">
        <template data-user-template>
            <div class="card">   
              <h3> <div class="head" data-header>  </div></h3>
              <div class="terem" data-classroom></div><br>
         
        </div>
        </template>
    </div> 
</div>

</body>
</html>
