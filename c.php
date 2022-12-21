<!DOCTYPE html>
<html>
<head>
 <title>Map</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="css/mymap.css" type="text/css" />
 <script>
$("#appendTo").click(function() {
  $("#moveMe").appendTo($(".too"));
});
</script>

 </head>
 <body>
 <?php
    include "map.php";
    ?>

 <table>
    <tr>
    <td class="searchTab">
        <div class="cont">
            <h3>Keress a VTS területén</h3>
            <p> Írja be hova szeretne eljutni a VTS területén</p>
           

        </div>
        <div class="resultTable">
		<?php
		include "informaciospanel.php";
		?>
        </div>
    </td>
				<script language='JavaScript' type='text/JavaScript'>
			/*	function move() {
				
					//porta
					 var y=document.getElementById('i').offsetLeft;
					 y= i.style.left = "65px";
				}*/
				function move() {
					//
				    document.getElementById('i').style.right="3830px";
					document.getElementById('i').style.top="-170px";
				}

				</script>
				</head>
				<body>
				<button id="i"  class="moveMe"><img class="icon"  src="images/mapicon.png" alt="logo"></button>
				<button id="i"  class="moveMeIntoMain">You are here</button>
				
				
    <td>
    <div id="mapid">
    <img  src="images/termek.png" alt="logo">
    </div>
    </td>
    </tr>
</table>

</body>
</html>
