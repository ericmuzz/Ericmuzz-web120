<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/big.css" />
<link rel="stylesheet" href="css/forms.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <a href="index.php">
        <img class="title" src="images/cheyetteassoc.png">
    </a>
  <nav id="cssmenu">
  <ul>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
     <li><a href="history.php"><span><i class="fas fa-history"></i> History</span></a></li>
     <li><a href="services.php"><span><i class="fas fa-concierge-bell"></i> Services</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> About</span></a>
        <ul>
           <li><a href="location.php"><span><i class="fas fa-map-marker-alt"></i> Location</span></a></li>
           <li><a href="contact.php"><span><i class="fas fa-phone"></i> Contact</span></a></li>
        </ul>
     </li>
  </ul>
</nav>
</header>

<!-- START LEFT COL -->
<section class="leftcol">
 <h2 class="pageID"><?=$PageID?></h2>