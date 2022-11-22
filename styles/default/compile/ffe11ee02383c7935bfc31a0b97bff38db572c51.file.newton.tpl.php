<?php /* Smarty version Smarty-3.1.14, created on 2019-09-02 21:52:38
         compiled from "styles/default/newton.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10982088975ad5e405d9a4c0-88265596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffe11ee02383c7935bfc31a0b97bff38db572c51' => 
    array (
      0 => 'styles/default/newton.tpl',
      1 => 1567342532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10982088975ad5e405d9a4c0-88265596',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ad5e405da3f84_70258632',
  'variables' => 
  array (
    'wynik_zadanie' => 0,
    'zadanie2' => 0,
    'zadanie3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5e405da3f84_70258632')) {function content_5ad5e405da3f84_70258632($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wynik dla zadania z zajęć. Podane x: [-2, -1, 0, 2, 4] &nbsp; Wartości y: [-1, 0, 5, 99, -55]</p>
  	<p>Ilorazy różnicowe: <br> <?php echo $_smarty_tpl->tpl_vars['wynik_zadanie']->value;?>
 </p>
    <p>Współczynniki: <br> <?php echo $_smarty_tpl->tpl_vars['zadanie2']->value;?>
</p>
    <p>Wynik dla X=1: <?php echo $_smarty_tpl->tpl_vars['zadanie3']->value;?>
</p>
  </div>

  <div class="w3-container" id="contact" style="margin-top:75px">
  <h2 class="w3-xxxlarge w3-text-red">Wpisz własne dane</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Podaj własne dane. Liczby wpisuj po przecinku (,)</p>
  	<form action="newton/licz" method="POST">
      <div class="w3-section">
        <label>X</label>
        <input class="w3-input w3-border" type="text" name="xs" required>
      </div>
      <div class="w3-section">
        <label>Y</label>
        <input class="w3-input w3-border" type="text" name="ys" required>
      </div>
      <div class="w3-section">
        <label>Szukany X</label>
        <input class="w3-input2 w3-border" type="text" name="punkt" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Oblicz wynik</button>
    </form>
  </div>
<div class="w3-container" id="contact" style="margin-top:75px">
  <h2 class="w3-xxxlarge w3-text-red">Dane z pliku</h2>
  <hr style="width:50px;border:5px solid red" class="w3-round">
  <p>Wybierz plik. Pierwsza linia to punkt, dla którego chcemy obliczyć wartość. Druga linia to X po przecinku, trzecia linia to Y po przecinku </p>
  <form action="newton/plik" method="POST" ENCTYPE="multipart/form-data">
    <input class="w3-border" type="file" name="plik"/><br/><br/><br/>
    <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Oblicz wynik</button>
  </form>
</div>
<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>