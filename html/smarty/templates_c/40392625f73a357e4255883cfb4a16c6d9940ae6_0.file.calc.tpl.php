<?php
/* Smarty version 3.1.30, created on 2017-02-12 15:59:09
  from "/home/maxence/Documents/Projects/PHP/html/smarty/templates/calc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a0783d3f4721_18366503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40392625f73a357e4255883cfb4a16c6d9940ae6' => 
    array (
      0 => '/home/maxence/Documents/Projects/PHP/html/smarty/templates/calc.tpl',
      1 => 1486911244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58a0783d3f4721_18366503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"My Page Title"), 0, false);
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
