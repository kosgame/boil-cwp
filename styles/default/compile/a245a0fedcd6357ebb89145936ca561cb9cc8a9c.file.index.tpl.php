<?php /* Smarty version Smarty-3.1.14, created on 2018-03-20 13:45:43
         compiled from "styles\default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7935945645ab0025b10fbd7-88610839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a245a0fedcd6357ebb89145936ca561cb9cc8a9c' => 
    array (
      0 => 'styles\\default\\index.tpl',
      1 => 1521547561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7935945645ab0025b10fbd7-88610839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ab0025b439080_70393082',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0025b439080_70393082')) {function content_5ab0025b439080_70393082($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h2 class="w3-xxxlarge w3-text-red">Co to są metody numeryczne?</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Metody numeryczne są to sposoby rozwiązywania złożonych problemów matematycznych za pomocą narzędzi obliczeniowych udostępnianych przez popularne języki programowania.</p>
    <p>Metody numeryczne są jedną z tych dziedzin matematyki stosowanej, których zastosowanie w praktyce jest powszechne. Wykorzystywane są wówczas, gdy badany problem nie ma w ogóle rozwiązania analitycznego (danego wzorami), lub korzystanie z takich rozwiązań jest uciążliwe ze względu na ich złożoność lub z innych powodów (np. stosowanie eliminacji Gaussa zamiast wyliczania rozwiązań układu równań metodą wyznaczników jest stosowana dlatego, że jest lepiej uwarunkowana numerycznie, a nie dlatego, że brak jest wzoru). Otrzymywane tą drogą wyniki są na ogół przybliżone, jednak dokładność obliczeń może być z góry określona i dobiera się ją zależnie od potrzeb.</p>

	<p>Inaczej mówiąc: metody numeryczne polegają na uzyskiwaniu wyniku poprzez sekwencję kolejnych przybliżeń. W efekcie otrzymany wynik będzie cechował się prawie zawsze pewnym błędem, chociaż ten błąd może być dowolnie mały. Metody numeryczne znalazły zastosowanie wszędzie tam, gdzie dojście do wyniku innymi sposobami jest niemożliwe lub bardzo trudne. Takim przykładem z życia szkolnego może być np. obliczenie powierzchni jakiejś nieregularnej figury lub pola pod krzywą.</p>
  </div>

<!-- End page content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>