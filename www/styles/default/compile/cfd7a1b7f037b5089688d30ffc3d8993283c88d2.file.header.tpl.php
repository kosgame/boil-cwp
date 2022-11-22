<?php /* Smarty version Smarty-3.1.14, created on 2022-11-22 10:54:21
         compiled from "styles/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15495210685ad5e4013bf677-43831383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfd7a1b7f037b5089688d30ffc3d8993283c88d2' => 
    array (
      0 => 'styles/default/header.tpl',
      1 => 1570267184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15495210685ad5e4013bf677-43831383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ad5e4013ffb51_58620967',
  'variables' => 
  array (
    'adres' => 0,
    'strona' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5e4013ffb51_58620967')) {function content_5ad5e4013ffb51_58620967($_smarty_tpl) {?><!DOCTYPE html>
<html>
<title>Metody Numeryczne</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
styles/css/styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Metody numeryczne</b></h3>
  </div>
  <div class="w3-bar-block">
  	<p>Interpolacja</p>
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
index.php?strona=lagrange" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Lagrange</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
index.php?strona=newton" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Newton</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
index.php?strona=cramer" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Wzory Cramera</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
index.php?strona=bisekcja" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Metoda Bisekcji</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
index.php?strona=styczne" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Newton-Raphson</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
index.php?strona=prostokat" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Prostokąty</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
index.php?strona=trapez" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Trapezy</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
index.php?strona=simpson" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Simpson</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
index.php?strona=monte" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Monte Carlo</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
index.php?strona=euler" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Metoda Eulera</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
index.php?strona=heun" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Metoda Heuna</a>

  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span><a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
">Metody2 numeryczne</a></span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-right:40px">
  <div id="headerLogo"></div>

<!-- Services -->
  <div class="w3-container" id="services" style="padding:40px;">
    <h1 class="w3-xxxlarge w3-text-red"><b><?php echo $_smarty_tpl->tpl_vars['strona']->value['nazwa'];?>
</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p><?php echo $_smarty_tpl->tpl_vars['strona']->value['opis'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['strona']->value['opis_big'];?>
</p>
  </div>

  <!-- Contact -->
  <div class="w3-container" id="contact" style="padding:40px;">

<?php }} ?>