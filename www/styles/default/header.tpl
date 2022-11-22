<!DOCTYPE html>
<html>
<title>Badania operacyjne i logistyka - projekt CPM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{$adres}styles/css/styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b><a href="{$adres}index.php">Badania operacyjne i logistyka</a></b></h3>
  </div>
  <div class="w3-bar-block">
  	<p>Programowanie sieciowe</p>
    <a href="{$adres}index.php?strona=cpm" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Metoda CPM</a>
{*    <a href="{$adres}index.php?strona=lagrange" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Lagrange</a>*}
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span><a href="{$adres}">Badania operacyjne i logistyka</a></span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-right:40px">
  <div id="headerLogo"></div>

<!-- Services -->
  <div class="w3-container" id="services" style="padding:20px;">
    <h1 class="w3-xxxlarge w3-text-red"><b>{$strona['nazwa']}</b></h1>
    <p>{$strona['opis']}</p>
    <p>{$strona['opis_big']}</p>
  </div>

  <!-- Contact -->
  <div class="w3-container" id="contact" style="padding:20px;">

