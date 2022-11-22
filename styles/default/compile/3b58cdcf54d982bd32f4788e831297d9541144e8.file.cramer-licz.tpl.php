<?php /* Smarty version Smarty-3.1.14, created on 2018-05-08 11:15:59
         compiled from "styles\default\cramer-licz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3851402835af168d9900e12-43479604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b58cdcf54d982bd32f4788e831297d9541144e8' => 
    array (
      0 => 'styles\\default\\cramer-licz.tpl',
      1 => 1525770698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3851402835af168d9900e12-43479604',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5af168d993a4b0_75218084',
  'variables' => 
  array (
    'warunek' => 0,
    'error' => 0,
    'wyznaczniki' => 0,
    'wyniki' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af168d993a4b0_75218084')) {function content_5af168d993a4b0_75218084($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	  <h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
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

  <div class="w3-container" id="contact" style="margin-top:35px">
    <h2 class="w3-xxxlarge w3-text-red">Wykresy</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>tutaj bym chciał narysowany wykres do podanych danych :) ciekawe jak coś takiego można osiągnąć :D</p>
  </div>


<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>