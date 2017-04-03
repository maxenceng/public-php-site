<?php
/* Smarty version 3.1.30, created on 2017-04-03 02:01:47
  from "/var/www/html/php/html/smarty/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e190ebe97b83_73547351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acc249efbdb6f264d82edbc9fe0235bc0f2c63a0' => 
    array (
      0 => '/var/www/html/php/html/smarty/templates/login.tpl',
      1 => 1491177707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58e190ebe97b83_73547351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Se connecter"), 0, false);
?>

<div class="container">
  <h1>Se connecter</h1>
  <span class="error"></span>
  <form action="/login" method="post">
    <div>
      <label for="email">Email</label>
      <input id="email" name="email" type="email">
    </div>
    <div>
      <label for="password">Mot de passe</label>
      <input id="password" name="password" type="password">
    </div>
    <button type="submit">Se connecter</button>
  </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
