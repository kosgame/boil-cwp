<?php /* Smarty version Smarty-3.1.14, created on 2019-09-02 22:09:59
         compiled from "styles/default/euler.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18331872965b041de0b68dc8-89590897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '814a3bda7ff5b6996021777d25e6bdc75b61e19c' => 
    array (
      0 => 'styles/default/euler.tpl',
      1 => 1567342534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18331872965b041de0b68dc8-89590897',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b041de0c01347_54065443',
  'variables' => 
  array (
    'echo' => 0,
    'echox' => 0,
    'echoy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b041de0c01347_54065443')) {function content_5b041de0c01347_54065443($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wyniki dla zadania z zajęć. Podane wartości y`(x) = y &nbsp; y(0) = 1 &nbsp; xp= 0 &nbsp; xk = 0.4 &nbsp; h = 0.1</p>
    <p>Wynik obliczonej całki:  <br><?php echo $_smarty_tpl->tpl_vars['echo']->value;?>
</p>
    <p>X:  <br><?php echo $_smarty_tpl->tpl_vars['echox']->value;?>
</p>
    <p>Y:  <br><?php echo $_smarty_tpl->tpl_vars['echoy']->value;?>
</p>

  </div>

  <div class="w3-container" id="contact" style="margin-top:75px">
  <h2 class="w3-xxxlarge w3-text-red">Wpisz własne dane</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Podaj własne dane. Funckję podaj bez spacji Plik tekstowy musi mieć w pierwszej linijce oddzielone przecinkami liczby <b>x</b>, w następnej odpowiadające im <b>y</b>, w ostatniej linijce pojedynczy <b>x</b> dla którego szukamy.</p>

  	<form action="euler/licz" method="POST">
      <div class="w3-section">
        <label>Początek zakresu</label>
        <input class="w3-input w3-border" type="text" name="start" required>
      </div>
      <div class="w3-section">
        <label>Koniec zakresu</label>
        <input class="w3-input w3-border" type="text" name="koniec" required>
      </div>
       <div class="w3-section">
        <label>Y(0)</label>
        <input class="w3-input w3-border" type="text" name="y" required>
      </div>
       <div class="w3-section">
        <label>krok h</label>
        <input class="w3-input w3-border" type="text" name="h" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Oblicz wynik</button>
    </form>  

  </div>

<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>