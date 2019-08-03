<?php include ("inc/header.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>yourTechieguys</title>
<div class="w3-content w3-display-container">
  <img class="mySlides" src="content/images/docker-banner.png">
  <img class="mySlides" src="img_snowtops.jpg">
  <img class="mySlides" src="img_mountains.jpg">
  <div class="w3-center w3-display-bottommiddle" style="width:100%">
    <div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
  </div>
</div>
<?php include_once("inc/footer.php"); ?>
