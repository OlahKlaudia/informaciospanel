
<!DOCTYPE html>
<html>
<head>
 <title>Map</title>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="mymap.css" type="text/css" />
 <script src="myscripts.js" defer></script> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <!-- INCLUDING JQUERY-->
   <style>
    html, body {
        padding: Opx;
        height: 1920px;
        width:1080px;
        display:relative;
        }
        .search-wrapper{
            display:flex;
            flex-direction:column;
            gap: .25rem;
      
        }
       #search{
            width:30%;
            height:60px;
       }

        .user-cards{
            display:grid;
            grid-template-columns:repeat(auto-fill, minmax(250px, 1fr));
          
            margin-top:1rem;

        }
        .card > .headers{
            margin-bottom: .25rem
        }
        .card > .body{
            font-size: .8rem;
            color: #000;
            
        }
        .hide{
            display:none;
        }
      
        .search-cont{
            margin-top:7%;
            padding:15px;
        }
        .card{
            
            padding:15%;
       
            border:3px solid #00008B;
            background-color: #0093DD;
            color:#fff;
        }

    </style>
 </head>
 <?php
    include "map.php";
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
