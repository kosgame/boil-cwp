<!DOCTYPE html>
<html>
<title>Metody Numeryczne</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{$adres}styles/css/styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Metody numeryczne</b></h3>
  </div>
  <div class="w3-bar-block">
  	<p>Interpolacja</p>
    <a href="{$adres}index.php?strona=lagrange" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Lagrange</a>
    <a href="{$adres}index.php?strona=newton" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Newton</a>
    <a href="{$adres}index.php?strona=cramer" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Wzory Cramera</a>
    <a href="{$adres}index.php?strona=bisekcja" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Metoda Bisekcji</a>
    <a href="{$adres}index.php?strona=styczne" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Newton-Raphson</a>
    <a href="{$adres}index.php?strona=prostokat" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Prostokąty</a>
    <a href="{$adres}index.php?strona=trapez" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Trapezy</a>
    <a href="{$adres}index.php?strona=simpson" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Simpson</a>
    <a href="{$adres}index.php?strona=monte" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Monte Carlo</a>
    <a href="{$adres}index.php?strona=euler" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Metoda Eulera</a>
    <a href="{$adres}index.php?strona=heun" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Metoda Heuna</a>

  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span><a href="{$adres}">Metody2 numeryczne</a></span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-right:40px">
  <div id="headerLogo"></div>

<!-- Services -->
  <div class="w3-container" id="services" style="padding:40px;">
    <h1 class="w3-xxxlarge w3-text-red"><b>{$strona['nazwa']}</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>{$strona['opis']}</p>
    <p>{$strona['opis_big']}</p>
  </div>

  <!-- Contact -->
  <div class="w3-container" id="contact" style="padding:40px;">

