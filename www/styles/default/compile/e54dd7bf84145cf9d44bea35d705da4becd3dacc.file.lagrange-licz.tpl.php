<?php /* Smarty version Smarty-3.1.14, created on 2019-03-07 10:58:34
         compiled from "styles/default/lagrange-licz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2088794125ad5f848ac4df7-00555255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e54dd7bf84145cf9d44bea35d705da4becd3dacc' => 
    array (
      0 => 'styles/default/lagrange-licz.tpl',
      1 => 1551951865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2088794125ad5f848ac4df7-00555255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ad5f848bd5ea6_89493871',
  'variables' => 
  array (
    'podane' => 0,
    'wynik' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5f848bd5ea6_89493871')) {function content_5ad5f848bd5ea6_89493871($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	  <h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wynik dla podanych przez użytkownika liczb. Szukamy wartości dla X: <b><?php echo $_smarty_tpl->tpl_vars['podane']->value['punkt'];?>
</b></p>
    <p>Podane wartości X: <b><?php echo $_smarty_tpl->tpl_vars['podane']->value['x'];?>
</b> </br>
       Podane wartości Y: <b><?php echo $_smarty_tpl->tpl_vars['podane']->value['y'];?>
</b> </br> </p>
    <p>Obliczony wynik: <?php echo $_smarty_tpl->tpl_vars['wynik']->value;?>
</p>
  </div>

  <!---<div class="w3-container" id="contact" style="margin-top:35px">
    <h2 class="w3-xxxlarge w3-text-red">Wykresy</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>tutaj bym chciał narysowany wykres do podanych danych :) ciekawe jak coś takiego można osiągnąć :D</p>
  </div>
--->

<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>