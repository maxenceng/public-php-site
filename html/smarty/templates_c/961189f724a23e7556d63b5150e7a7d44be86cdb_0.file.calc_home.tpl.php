<?php
/* Smarty version 3.1.30, created on 2017-04-03 03:33:20
  from "/var/www/html/php/html/smarty/templates/calc_home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e1a66070a447_54036350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '961189f724a23e7556d63b5150e7a7d44be86cdb' => 
    array (
      0 => '/var/www/html/php/html/smarty/templates/calc_home.tpl',
      1 => 1491177785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58e1a66070a447_54036350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Calculatrice"), 0, false);
?>

<div class="container">
    <p>Bienvenue sur le webservice calculatrice!</p>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
