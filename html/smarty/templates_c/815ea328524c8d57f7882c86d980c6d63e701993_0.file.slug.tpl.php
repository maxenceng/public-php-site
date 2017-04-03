<?php
/* Smarty version 3.1.30, created on 2017-02-12 14:33:37
  from "/home/maxence/Documents/Projects/PHP/html/smarty/templates/slug.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a06431377063_60849891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '815ea328524c8d57f7882c86d980c6d63e701993' => 
    array (
      0 => '/home/maxence/Documents/Projects/PHP/html/smarty/templates/slug.tpl',
      1 => 1486756542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58a06431377063_60849891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"My Page Title"), 0, false);
?>

<div class="jumbotron">
    <div class="container">
	Je suis l'article <?php echo $_smarty_tpl->tpl_vars['slug']->value;?>

    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
