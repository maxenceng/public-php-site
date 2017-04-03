<?php
/* Smarty version 3.1.30, created on 2017-04-03 02:42:03
  from "/var/www/html/php/html/smarty/templates/json_home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e19a5b5033a7_11490132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6547e196cdb0a1cd5e15d8c0d158b0bc29ff6b9' => 
    array (
      0 => '/var/www/html/php/html/smarty/templates/json_home.tpl',
      1 => 1491178027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58e19a5b5033a7_11490132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Menu des fichiers JSON"), 0, false);
?>

<div class="container">
    <h1>Menu des JSON</h1>
    <ul id="menu-json">
        <li><a href="/json/pathologies">Pathologies</a></li>
        <li><a href="/json/symptpatho">Liens symptomes & pathologies</a></li>
    </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
