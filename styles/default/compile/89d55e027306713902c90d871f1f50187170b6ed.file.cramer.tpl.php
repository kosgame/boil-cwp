<?php /* Smarty version Smarty-3.1.14, created on 2018-05-08 11:19:15
         compiled from "styles\default\cramer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19742242135af15ffa860a97-38624135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89d55e027306713902c90d871f1f50187170b6ed' => 
    array (
      0 => 'styles\\default\\cramer.tpl',
      1 => 1525771076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19742242135af15ffa860a97-38624135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5af15ffa8fe146_77730232',
  'variables' => 
  array (
    'warunek' => 0,
    'error' => 0,
    'wyznaczniki' => 0,
    'wyniki' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af15ffa8fe146_77730232')) {function content_5af15ffa8fe146_77730232($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wyniki dla zadania z zajęć. Podane wartości x=[2, 4, 3] &nbsp; y=[5, 2, 8] &nbsp; z= [3, 5, 4] &nbsp; ww=[5, 4, 9]</p>
    <?php if ($_smarty_tpl->tpl_vars['warunek']->value!=0){?>
      <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    <?php }else{ ?> 
    	<p>Wyznacznik główny:  <?php echo $_smarty_tpl->tpl_vars['wyznaczniki']->value[0];?>
<br>
      Wyznacznik x:  <?php echo $_smarty_tpl->tpl_vars['wyznaczniki']->value[1];?>
<br>
      Wyznacznik y:  <?php echo $_smarty_tpl->tpl_vars['wyznaczniki']->value[2];?>
<br>
      Wyznacznik z:  <?php echo $_smarty_tpl->tpl_vars['wyznaczniki']->value[3];?>
<br> </p>
      <p>Wynik x:  <?php echo $_smarty_tpl->tpl_vars['wyniki']->value[0];?>
<br>
      Wynik y:  <?php echo $_smarty_tpl->tpl_vars['wyniki']->value[1];?>
<br>
      Wynik z:  <?php echo $_smarty_tpl->tpl_vars['wyniki']->value[2];?>
<br> </p>
    <?php }?>
  </div>

  <div class="w3-container" id="contact" style="margin-top:75px">
  <h2 class="w3-xxxlarge w3-text-red">Wpisz własne dane</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Podaj własne dane. Liczby wpisuj po przecinku (,) Lub importuj plik tekstowy. Plik tekstowy musi mieć w pierwszej linijce oddzielone przecinkami liczby <b>x</b>, w następnej odpowiadające im <b>y</b>, w ostatniej linijce pojedynczy <b>x</b> dla którego szukamy.</p>

  	<form action="cramer/licz" method="POST">
      <div class="w3-section">
        <label>X</label>
        <input class="w3-input w3-border" type="text" name="as" required>
      </div>
      <div class="w3-section">
        <label>Y</label>
        <input class="w3-input w3-border" type="text" name="bs" required>
      </div>
       <div class="w3-section">
        <label>Z</label>
        <input class="w3-input w3-border" type="text" name="cs" required>
      </div>
       <div class="w3-section">
        <label>Wyrazy Wolne</label>
        <input class="w3-input w3-border" type="text" name="ww" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Oblicz wynik</button>
    </form>  

  </div>

<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>