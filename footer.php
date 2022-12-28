<html>
<head>
    <title>Információs panel</title>
    <link rel="stylesheet" href="css/footer.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<footer>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
    <img class="vts" src="images/vtss.jpg" alt="vts">  
    </div>
    <div class="col-sm-1 kep">
    <img class="contact" src="images/email.jpg" >   
         <img class="contact2" src="images/phone.jpg" > 
    </div>
    <div class="col-sm-5">
         <h4 class="footer-heading text-uppercase text-white"><?php echo($header['email']);?></h4>
         <h2>office@vts.su.ac.rs</h2>   <br>   
         <h4 class="footer-heading text-uppercase text-white"> <?php echo($header['phone']);?></h4>
         <h2>+38124/655-201</h2>
    </div>
  </div>
</div>
</footer>
</body>
</html>