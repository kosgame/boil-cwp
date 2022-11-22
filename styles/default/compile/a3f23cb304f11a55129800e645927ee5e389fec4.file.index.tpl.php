<?php /* Smarty version Smarty-3.1.14, created on 2019-09-02 22:05:46
         compiled from "styles/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6186995565ad5e4010b7334-07762963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3f23cb304f11a55129800e645927ee5e389fec4' => 
    array (
      0 => 'styles/default/index.tpl',
      1 => 1567454742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6186995565ad5e4010b7334-07762963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ad5e4011a24b1_26828201',
  'variables' => 
  array (
    'adres' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5e4011a24b1_26828201')) {function content_5ad5e4011a24b1_26828201($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h2 class="w3-xxxlarge w3-text-red">Co to są metody numeryczne?</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Metody numeryczne są to sposoby rozwiązywania złożonych problemów matematycznych za pomocą narzędzi obliczeniowych udostępnianych przez popularne języki programowania.</p>
    <p>Metody numeryczne są jedną z tych dziedzin matematyki stosowanej, których zastosowanie w praktyce jest powszechne. Wykorzystywane są wówczas, gdy badany problem nie ma w ogóle rozwiązania analitycznego (danego wzorami), lub korzystanie z takich rozwiązań jest uciążliwe ze względu na ich złożoność lub z innych powodów (np. stosowanie eliminacji Gaussa zamiast wyliczania rozwiązań układu równań metodą wyznaczników jest stosowana dlatego, że jest lepiej uwarunkowana numerycznie, a nie dlatego, że brak jest wzoru). Otrzymywane tą drogą wyniki są na ogół przybliżone, jednak dokładność obliczeń może być z góry określona i dobiera się ją zależnie od potrzeb.</p>
    <img src="<?php echo $_smarty_tpl->tpl_vars['adres']->value;?>
styles/logo.png" align="right"/>
  </div>

<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>