<?php
error_reporting(0);
// Get keyword from HTML form
$keyword = isset($_POST["poi_keyword"])?$_POST["poi_keyword"]:"";
?>

<!DOCTYPE html>
<html>
<head>
 <title>Map</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <!-- LeafletJS CSS -->
 <style>
html, body {
padding: Opx;
height: 100% !important;
margin-top: 0px;
font-family: Tahoma, sans-serif;
font-size: 1em;
}

table {
width:1080px ;
border-collapse: collapse;


}

td, th{  
border-collapse: collapse;

padding: 10px;     
text-align: left;
vertical-align: top;
}

th{

text-align: center;
vertical-align: middle;
}

#btn_find, #btn_reset{
background-color: #0093DD;
color: #fff;
border:none;
padding:5px 10px;
}

.searchTab{
width:30%;
}

#mapid{
width:100%;
height: 1920px;
background-color: #fff;
}

.resultTable{
overflow-y: auto;
vertical-align: top;
height: 70vh;
padding-bottom: 30px;
padding-right: 5px;
margin-top: 10px;
}
.cont{
padding:5%;
}
.cont2{
margin-top: 10px;
}
.moveMeIntoMain {
	margin-top:1480px;
	margin-left:600px;
	background-color:red;
}
#i{

	width:60px;
	height:60px;
	text-align:center;
	color:white;
	
	position: absolute;
}
.moveMe{
border:none;
background-color:#D9D9D9;
margin-top:1480px;
margin-left:600px;
position: relative;
}
.icon{
	width:60px;
	height:60px;
	text-align:center;
}

	</style>
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="mymap.css" type="text/css" />
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
