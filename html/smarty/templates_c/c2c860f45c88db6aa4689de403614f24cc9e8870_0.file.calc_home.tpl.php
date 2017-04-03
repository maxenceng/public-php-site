<?php
/* Smarty version 3.1.30, created on 2017-02-12 16:24:00
  from "/home/maxence/Documents/Projects/PHP/html/smarty/templates/calc_home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a07e10aacbb7_69476663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c860f45c88db6aa4689de403614f24cc9e8870' => 
    array (
      0 => '/home/maxence/Documents/Projects/PHP/html/smarty/templates/calc_home.tpl',
      1 => 1486912982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58a07e10aacbb7_69476663 (Smarty_Internal_Template $_smarty_tpl) {
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
