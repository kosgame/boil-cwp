<?php /* Smarty version Smarty-3.1.14, created on 2018-05-08 12:16:33
         compiled from "styles\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249486085ab0025b52af74-58490825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a6bff05fafea003b904ef3ad7e1c1eaca8d6b55' => 
    array (
      0 => 'styles\\default\\header.tpl',
      1 => 1525774143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249486085ab0025b52af74-58490825',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ab0025b52c540_43767841',
  'variables' => 
  array (
    'adres' => 0,
    'strona' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0025b52c540_43767841')) {function content_5ab0025b52c540_43767841($_smarty_tpl) {?><!DOCTYPE html>
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
lagrange" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Lagrange</a> 
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
newton" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Newton</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
cramer" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Wzory Cramera</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
prostokat" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Prostokąty</a> 
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
trapez" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Trapezy</a> 
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
simpson" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Simpson</a> 
    <a href="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
monte" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Monte Carlo</a> 


  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Metody numeryczne</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

<!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b><?php echo $_smarty_tpl->tpl_vars['strona']->value['nazwa'];?>
</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p><?php echo $_smarty_tpl->tpl_vars['strona']->value['opis'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['strona']->value['opis_big'];?>
</p>
  </div>

  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    
<?php }} ?>