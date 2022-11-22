<?php /* Smarty version Smarty-3.1.14, created on 2019-03-14 10:32:14
         compiled from "styles/default/newton-plik.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1984177685c8a1f9ec17cf6-62431029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e4fdb5cd9b1c0ce9f4c2186b5ceef28b62d4e2b' => 
    array (
      0 => 'styles/default/newton-plik.tpl',
      1 => 1552556108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1984177685c8a1f9ec17cf6-62431029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'podane' => 0,
    'wynik' => 0,
    'wynik_zadanie' => 0,
    'zadanie2' => 0,
    'zadanie3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8a1f9ec313c1_03228428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8a1f9ec313c1_03228428')) {function content_5c8a1f9ec313c1_03228428($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
    <p>Ilorazy różnicowe: <br> <?php echo $_smarty_tpl->tpl_vars['wynik_zadanie']->value;?>
 </p>
    <p>Współczynniki: <br> <?php echo $_smarty_tpl->tpl_vars['zadanie2']->value;?>
</p>
    <p>Wynik dla <?php echo $_smarty_tpl->tpl_vars['podane']->value['punkt'];?>
: <?php echo $_smarty_tpl->tpl_vars['zadanie3']->value;?>
</p>
</div>

<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>