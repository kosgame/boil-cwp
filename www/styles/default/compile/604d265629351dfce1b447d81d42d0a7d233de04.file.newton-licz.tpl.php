<?php /* Smarty version Smarty-3.1.14, created on 2019-03-14 10:31:38
         compiled from "styles/default/newton-licz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20505850405c8a1cf59926b4-51646015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '604d265629351dfce1b447d81d42d0a7d233de04' => 
    array (
      0 => 'styles/default/newton-licz.tpl',
      1 => 1552556130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20505850405c8a1cf59926b4-51646015',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8a1cf59b8cb7_40470416',
  'variables' => 
  array (
    'podane' => 0,
    'wynik_zadanie' => 0,
    'zadanie2' => 0,
    'zadanie3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8a1cf59b8cb7_40470416')) {function content_5c8a1cf59b8cb7_40470416($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	  <h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wynik dla podanych przez użytkownika liczb. Szukamy wartości dla X: <b><?php echo $_smarty_tpl->tpl_vars['podane']->value['punkt'];?>
</b></p>
    <p>Podane wartości X: <b><?php echo $_smarty_tpl->tpl_vars['podane']->value['x'];?>
</b> </br>
       Podane wartości Y: <b><?php echo $_smarty_tpl->tpl_vars['podane']->value['y'];?>
</b> </br> </p>

    <p>Ilorazy różnicowe: <br> <?php echo $_smarty_tpl->tpl_vars['wynik_zadanie']->value;?>
 </p>
    <p>Współczynniki: <br> <?php echo $_smarty_tpl->tpl_vars['zadanie2']->value;?>
</p>
    <p>Wynik dla X=<?php echo $_smarty_tpl->tpl_vars['podane']->value['punkt'];?>
: <?php echo $_smarty_tpl->tpl_vars['zadanie3']->value;?>
</p>
  </div>


<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>