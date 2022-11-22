<?php /* Smarty version Smarty-3.1.14, created on 2018-05-08 11:49:44
         compiled from "styles\default\trapez.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15424509305af172b8a4e789-19861348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05354b9c54f7d4c48f5c1040df79e1b389994538' => 
    array (
      0 => 'styles\\default\\trapez.tpl',
      1 => 1525772972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15424509305af172b8a4e789-19861348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'calka' => 0,
    'h' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5af172b8a85f71_74899943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af172b8a85f71_74899943')) {function content_5af172b8a85f71_74899943($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wyniki dla zadania z zajęć. Podane wartości f = x^3 + 2 &nbsp; n = 3 &nbsp; xp= 1 &nbsp; xk = 4</p>
    <p>Wynik obliczonej całki:  <?php echo $_smarty_tpl->tpl_vars['calka']->value;?>
<br>
     Krok wynosił:  <?php echo $_smarty_tpl->tpl_vars['h']->value;?>
</p>
  </div>

  <div class="w3-container" id="contact" style="margin-top:75px">
  <h2 class="w3-xxxlarge w3-text-red">Wpisz własne dane</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Podaj własne dane. Funckję podaj bez spacji Plik tekstowy musi mieć w pierwszej linijce oddzielone przecinkami liczby <b>x</b>, w następnej odpowiadające im <b>y</b>, w ostatniej linijce pojedynczy <b>x</b> dla którego szukamy.</p>

  	<form action="cramer/licz" method="POST">
      <div class="w3-section">
        <label>Funkcja (np X*X*X+2)</label>
        <input class="w3-input w3-border" type="text" name="funkcja" required>
      </div>
      <div class="w3-section">
        <label>N</label>
        <input class="w3-input w3-border" type="text" name="n" required>
      </div>
       <div class="w3-section">
        <label>xp</label>
        <input class="w3-input w3-border" type="text" name="xp" required>
      </div>
       <div class="w3-section">
        <label>xk</label>
        <input class="w3-input w3-border" type="text" name="xk" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Oblicz wynik</button>
    </form>  

  </div>

<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>