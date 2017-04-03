<?php
/* Smarty version 3.1.30, created on 2017-02-14 14:21:27
  from "/var/www/html/smarty/templates/calc_home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a31267cf26c0_01485895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23f26395c36d97ffc6723d04259d7e94b2396a9f' => 
    array (
      0 => '/var/www/html/smarty/templates/calc_home.tpl',
      1 => 1486969760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58a31267cf26c0_01485895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Calculatrice"), 0, false);
?>

<div class="jumbotron">
    <div class="container">
        <p>Welcome to the Calc WS!</p>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
