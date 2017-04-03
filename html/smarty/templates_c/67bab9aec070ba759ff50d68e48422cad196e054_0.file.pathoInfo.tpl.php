<?php
/* Smarty version 3.1.30, created on 2017-04-03 01:12:59
  from "/var/www/html/php/html/smarty/templates/pathoInfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e1857b8d23f0_13657719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67bab9aec070ba759ff50d68e48422cad196e054' => 
    array (
      0 => '/var/www/html/php/html/smarty/templates/pathoInfo.tpl',
      1 => 1491174778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58e1857b8d23f0_13657719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Symptomes liés"), 0, false);
?>

<div class="container">
    <h1>Symptomes liés à la pathologie : <?php echo $_smarty_tpl->tpl_vars['patho']->value;?>
</h1>
    <div id="symptomes"></div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
