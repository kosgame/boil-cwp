<?php /* Smarty version Smarty-3.1.14, created on 2018-05-22 16:03:33
         compiled from "styles/default/euler-licz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18926732805b0423351db981-10570285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4213519214f139440466af1a40c45ad8ccf4fe39' => 
    array (
      0 => 'styles/default/euler-licz.tpl',
      1 => 1526998036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18926732805b0423351db981-10570285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'echo' => 0,
    'echox' => 0,
    'echoy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b04233520fac0_91735623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b04233520fac0_91735623')) {function content_5b04233520fac0_91735623($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	  <h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
     <p>Wynik obliczonej całki:  <br><?php echo $_smarty_tpl->tpl_vars['echo']->value;?>
</p>
    <p>X:  <br><?php echo $_smarty_tpl->tpl_vars['echox']->value;?>
</p>
    <p>Y:  <br><?php echo $_smarty_tpl->tpl_vars['echoy']->value;?>
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