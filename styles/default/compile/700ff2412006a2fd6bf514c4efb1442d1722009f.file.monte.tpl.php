<?php /* Smarty version Smarty-3.1.14, created on 2018-05-08 12:19:20
         compiled from "styles\default\monte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7506714485af179030fe6d0-92395876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '700ff2412006a2fd6bf514c4efb1442d1722009f' => 
    array (
      0 => 'styles\\default\\monte.tpl',
      1 => 1525774758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7506714485af179030fe6d0-92395876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5af179031345b3_64948090',
  'variables' => 
  array (
    'calka' => 0,
    'test' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af179031345b3_64948090')) {function content_5af179031345b3_64948090($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wyniki dla zadania z zajęć. Podane wartości f = x^3 + 2 &nbsp; n = 4 &nbsp; xp= 1 &nbsp; xk = 5</p>
    <p>Wynik obliczonej całki:  <?php echo $_smarty_tpl->tpl_vars['calka']->value;?>
<br>
      Wynik testowy (punkty z zajęć) :  <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
<br></p>
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