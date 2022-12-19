<html>
<head>
    <title>Információs panel</title>
    <link rel="stylesheet" href="header.css">
    </head>
<body>
<?php
     $translations = [
      'engTohu'=>  [
        "MAP" => "TÉRKÉP",
        "TEACHERS" => "TANÁROK JELENLÉTE",
        "EREF"=>"EREF",
        "SCHOOLERSHIP"=>"ÖSZTÖNDÍJ"
    ],
    'engToSrb' => [
        "MAP" => "MAPA",
        "TEACHERS" => "PRISUSTVO NASTAVNIKA",
        "EREF"=>"EREF",
        "SCHOOLERSHIP"=>"STIPENDIJE"
    ],
    'huTosrb' =>  [
      "TÉRKÉP" => "MAPA",
      "TANÁROK JELENLÉTE" => "PRISUSTVO NASTAVNIKA",
      "EREF"=>"EREF",
      "ÖSZTÖNDÍJ"=>"STIPENDIJE"
    ],
    'huToeng' =>  [
      "TÉRKÉP" => "MAP",
      "TANÁROK JELENLÉTE" => "TEACHERS",
      "EREF"=>"EREF",
      "ÖSZTÖNDÍJ"=>"SCHOOLERSHIP"
    ],
    'srbToHu' =>  [
      "TÉRKÉP" => "MAP",
      "TANÁROK JELENLÉTE" => "TEACHERS",
      "EREF"=>"EREF",
      "ÖSZTÖNDÍJ"=>"SCHOOLERSHIP"
    ],
    'srbToEng' =>  [
      "TÉRKÉP" => "MAP",
      "TANÁROK JELENLÉTE" => "TEACHERS",
      "EREF"=>"EREF",
      "ÖSZTÖNDÍJ"=>"SCHOOLERSHIP"
    ]
    ];
  /*  session_start();
    //This is the default language. We will use it 2 places, so i am put it 
    //into a varaible.
    $defaultLang = 'eng';
    
    //Checking, if the $_GET["language"] has any value
    //if the $_GET["language"] is not empty
    if (!empty($_GET["language"])) { //<!-- see this line. checks 
        //Based on the lowecase $_GET['language'] value, we will decide,
        //what lanuage do we use
        switch (strtolower($_GET["language"])) {
            case "eng":
                //If the string is en or EN
                $_SESSION['lang'] = 'eng';
                break;
            case "hu":
                //If the string is tr or TR
                $_SESSION['lang'] = 'hu';
                break;
            case "srb":
                //If the string is tr or TR
                $_SESSION['lang'] = 'srb';
                break;
            default:
                //IN ALL OTHER CASES your default langauge code will set
                //Invalid languages
                $_SESSION['lang'] = $defaultLang;
                break;
        }
    }
    
    //If there was no language initialized, (empty $_SESSION['lang']) then
    if (empty($_SESSION["lang"])) {
        //Set default lang if there was no language
        $_SESSION["lang"] = $defaultLang;
    }*/

    ?>
    <?php
session_start();




    $languages = array('eng', 'hu', 'srb');
    if(isset($_GET['lang']) AND in_array($_GET['lang'], $languages)){
        $_SESSION['lang'] = $_GET['lang'];
    }
    if(!isset($_SESSION['lang']))
    {    
        $_SESSION['lang'] = "hu";    
    }
    require_once($_SESSION['lang'].'.php');



    ?>
<?php

?>
</body>
</html>