<?php /* Smarty version Smarty-3.1.14, created on 2018-03-20 14:15:48
         compiled from "styles\default\lagrange-licz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9323520805ab102dcd8f552-75825910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66c3b1a1b8cdfe65d4196cd0676c454c5f0d15e5' => 
    array (
      0 => 'styles\\default\\lagrange-licz.tpl',
      1 => 1521551746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9323520805ab102dcd8f552-75825910',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ab102dcdbc624_95613912',
  'variables' => 
  array (
    'podane' => 0,
    'wynik' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab102dcdbc624_95613912')) {function content_5ab102dcdbc624_95613912($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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

  <div class="w3-container" id="contact" style="margin-top:35px">
    <h2 class="w3-xxxlarge w3-text-red">Wykresy</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>tutaj bym chciał narysowany wykres do podanych danych :) ciekawe jak coś takiego można osiągnąć :D</p>
  </div>


<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>