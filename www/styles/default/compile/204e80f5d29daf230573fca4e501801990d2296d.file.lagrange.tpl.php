<?php /* Smarty version Smarty-3.1.14, created on 2019-09-02 21:49:14
         compiled from "styles/default/lagrange.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9670955555ad5e403711114-85859261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '204e80f5d29daf230573fca4e501801990d2296d' => 
    array (
      0 => 'styles/default/lagrange.tpl',
      1 => 1567342532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9670955555ad5e403711114-85859261',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ad5e40371d807_16767017',
  'variables' => 
  array (
    'wynik_zadanie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5e40371d807_16767017')) {function content_5ad5e40371d807_16767017($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wynik dla zadania z zajęć. Podane punkty to: 1, 3, 5. Szukamy wartości dla 4</p>
  	<p>Znaleziony wynik: <?php echo $_smarty_tpl->tpl_vars['wynik_zadanie']->value;?>

  </div>

  <div class="w3-container" id="contact" style="margin-top:75px">
  <h2 class="w3-xxxlarge w3-text-red">Wpisz własne dane</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Podaj własne dane. Liczby wpisuj po przecinku (,) </p>
    <!--Lub importuj plik tekstowy. Plik tekstowy musi mieć w pierwszej linijce oddzielone przecinkami liczby <b>x</b>, w następnej odpowiadające im <b>y</b>, w ostatniej linijce pojedynczy <b>x</b> dla którego szukamy.</p>
    -->
  	<form action="lagrange/licz" method="POST">
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
    <p>Wybierz plik. Pierwsza linia to punkt, druga linia to X po przecinku, trzecia linia to Y po przecinku </p>
    <br />
    <form action="lagrange/plik" method="POST" ENCTYPE="multipart/form-data">
        <input class="w3-border" type="file" name="plik"/><br/><br/><br/>
        <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Oblicz wynik</button>
    </form>



</div>

<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>