<?php /* Smarty version Smarty-3.1.14, created on 2019-03-21 10:29:32
         compiled from "styles/default/cramer-licz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8683957045c9355f8bff554-16864996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f4d4ef1f42b23f179ca077acb7ee3e10f6e6191' => 
    array (
      0 => 'styles/default/cramer-licz.tpl',
      1 => 1553161061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8683957045c9355f8bff554-16864996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9355f8c64273_13198202',
  'variables' => 
  array (
    'podane' => 0,
    'warunek' => 0,
    'error' => 0,
    'wyznaczniki' => 0,
    'wyniki' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9355f8c64273_13198202')) {function content_5c9355f8c64273_13198202($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	  <h2 class="w3-xxxlarge w3-text-red">Wyniki z formularza</h2>
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