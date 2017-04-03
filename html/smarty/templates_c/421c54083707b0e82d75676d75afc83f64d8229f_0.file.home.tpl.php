<?php
/* Smarty version 3.1.30, created on 2017-02-15 23:57:10
  from "/home/maxence/Documents/Projects/PHP/html/smarty/templates/calc/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a4dcc69c51d9_89578871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '421c54083707b0e82d75676d75afc83f64d8229f' => 
    array (
      0 => '/home/maxence/Documents/Projects/PHP/html/smarty/templates/calc/home.tpl',
      1 => 1487197691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/header.tpl' => 1,
    'file:../partials/footer.tpl' => 1,
  ),
),false)) {
function content_58a4dcc69c51d9_89578871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Calculatrice"), 0, false);
?>

<div class="jumbotron">
    <div class="container">
        <p>Welcome to the Calc WS!</p>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
