<?php /* Smarty version Smarty-3.1.14, created on 2018-03-20 14:17:14
         compiled from "styles\default\lagrange.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14549950935ab0f930a06d51-96919000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '975ea43949fe8b9fa4c98c3eaaa59418bc8ea934' => 
    array (
      0 => 'styles\\default\\lagrange.tpl',
      1 => 1521551831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14549950935ab0f930a06d51-96919000',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ab0f930a31e69_97820637',
  'variables' => 
  array (
    'wynik_zadanie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0f930a31e69_97820637')) {function content_5ab0f930a31e69_97820637($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wynik dla zadania z zajęć. Podane punkty to: 1, 3, 5. Szukamy wartości dla 4</p>
  	<p>Znaleziony wynik: <?php echo $_smarty_tpl->tpl_vars['wynik_zadanie']->value;?>

  </div>

  <div class="w3-container" id="contact" style="margin-top:75px">
  <h2 class="w3-xxxlarge w3-text-red">Wpisz własne dane</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Podaj własne dane. Liczby wpisuj po przecinku (,) Lub importuj plik tekstowy. Plik tekstowy musi mieć w pierwszej linijce oddzielone przecinkami liczby <b>x</b>, w następnej odpowiadające im <b>y</b>, w ostatniej linijce pojedynczy <b>x</b> dla którego szukamy.</p>

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

<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>