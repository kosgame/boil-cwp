<?php /* Smarty version Smarty-3.1.14, created on 2019-03-07 10:57:14
         compiled from "styles/default/lagrange-plik.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17029124405c80eafa0ee932-38105551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a66b1cebffde78006c8153968de4ce723cc5fa8' => 
    array (
      0 => 'styles/default/lagrange-plik.tpl',
      1 => 1551951823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17029124405c80eafa0ee932-38105551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'podane' => 0,
    'wynik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c80eafa0f8a30_15581640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c80eafa0f8a30_15581640')) {function content_5c80eafa0f8a30_15581640($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	  <h2 class="w3-xxxlarge w3-text-red">Wyniki z pliku</h2>
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

<!---  <div class="w3-container" id="contact" style="margin-top:35px">
    <h2 class="w3-xxxlarge w3-text-red">Wykresy</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>tutaj bym chciał narysowany wykres do podanych danych :) ciekawe jak coś takiego można osiągnąć :D</p>
  </div>
-->

<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>