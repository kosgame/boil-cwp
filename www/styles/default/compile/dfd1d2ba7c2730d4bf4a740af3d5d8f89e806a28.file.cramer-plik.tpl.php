<?php /* Smarty version Smarty-3.1.14, created on 2019-03-21 10:30:41
         compiled from "styles/default/cramer-plik.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6247358215c9359c1285ea2-60223500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfd1d2ba7c2730d4bf4a740af3d5d8f89e806a28' => 
    array (
      0 => 'styles/default/cramer-plik.tpl',
      1 => 1553161047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6247358215c9359c1285ea2-60223500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'podane' => 0,
    'warunek' => 0,
    'error' => 0,
    'wyznaczniki' => 0,
    'wyniki' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9359c12f50a4_95802283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9359c12f50a4_95802283')) {function content_5c9359c12f50a4_95802283($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	  <h2 class="w3-xxxlarge w3-text-red">Wyniki z pliku</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Podane wartości <br />
        &nbsp; X: <?php echo $_smarty_tpl->tpl_vars['podane']->value['x'][0];?>
, <?php echo $_smarty_tpl->tpl_vars['podane']->value['x'][1];?>
, <?php echo $_smarty_tpl->tpl_vars['podane']->value['x'][2];?>
<br />
        &nbsp; Y: <?php echo $_smarty_tpl->tpl_vars['podane']->value['x'][0];?>
, <?php echo $_smarty_tpl->tpl_vars['podane']->value['y'][1];?>
, <?php echo $_smarty_tpl->tpl_vars['podane']->value['y'][2];?>
<br />
        &nbsp; Z: <?php echo $_smarty_tpl->tpl_vars['podane']->value['z'][0];?>
, <?php echo $_smarty_tpl->tpl_vars['podane']->value['z'][1];?>
, <?php echo $_smarty_tpl->tpl_vars['podane']->value['z'][2];?>
<br />
        &nbsp; WW: <?php echo $_smarty_tpl->tpl_vars['podane']->value['ww'][0];?>
, <?php echo $_smarty_tpl->tpl_vars['podane']->value['ww'][1];?>
, <?php echo $_smarty_tpl->tpl_vars['podane']->value['ww'][2];?>

    </p>

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


<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>