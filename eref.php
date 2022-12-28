<html>
<head>
    <title>Információs panel</title>
</head>
<?php
  include "header.php";
 ?>
<body>   
  <form id="login" target="frame" method="post" action="http://remote.com/login">
    <input type="hidden" name="username" value="login" />
    <input type="hidden" name="password" value="pass" />
</form>

<iframe id="frame" name="frame" height="1920px" width="1080px" title="Iframe Example" id="iframe" style="margin-top:70px;bottom:0px;"></iframe>

<script type="text/javascript">
    // submit the form into iframe for login into remote site
    document.getElementById('login').submit();

    // once you're logged in, change the source url (if needed)
    var iframe = document.getElementById('frame');
    iframe.onload = function() {
        if (iframe.src != "https://eref.vts.su.ac.rs/") {
            iframe.src = "https://eref.vts.su.ac.rs/";
        }
    }
</script>
 <?php
  include "footer.php";
 ?>
</html>