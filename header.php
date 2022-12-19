<html>
<head>
    <title>Információs panel</title>
    <link rel="stylesheet" href="header.css">
</head>
<body>

<?php

if($_GET['la']){
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

switch($_SESSION['la']){
     case "eng":
        require('eng.php');
    break;
    case "hu":
        require('hu.php');
    break;
    case "srb":
        require('srb.php');
    break;
    default:
        require('hu.php');
    }
    ?>

</body>
</html>