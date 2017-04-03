<?php
/* Smarty version 3.1.30, created on 2017-02-16 08:10:29
  from "/var/www/html/smarty/templates/json_home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a55e7579ab51_99219683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b911cfc82a418f14b2fb530c1180421f51cfc17f' => 
    array (
      0 => '/var/www/html/smarty/templates/json_home.tpl',
      1 => 1487232625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58a55e7579ab51_99219683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Menu des fichiers JSON"), 0, false);
?>

<div class="jumbotron">
    <div class="container">
        <h1>Menu des JSON</h1>
        <ul id="menu-json">
            <li><a href="/json/pathologies">Pathologies</a></li>
            <li><a href="/json/symptomes">Symptomes</a></li>
            <li><a href="/json/keywords">Mots-clés</a></li>
            <li><a href="/json/keysympt">Liens mots-clés & symptomes</a></li>
            <li><a href="/json/symptpatho">Liens symptomes & pathologies</a></li>
            <li><a href="/json/meridiens">Meridiens</a></li>
        </ul>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
