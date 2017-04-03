<?php
/* Smarty version 3.1.30, created on 2017-02-12 14:32:55
  from "/home/maxence/Documents/Projects/PHP/html/smarty/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a0640763cad9_31290242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44e1aba6ad06f34640e406ffcbb44f7c3d2e8972' => 
    array (
      0 => '/home/maxence/Documents/Projects/PHP/html/smarty/templates/login.tpl',
      1 => 1486906374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58a0640763cad9_31290242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Login"), 0, false);
?>

<div class="container">
  <div class="jumbotron">
    <h1>Se connecter</h1>
    <form class="text-center" action="/login" method="post">
      <div class="form-group">
        <input name="email" type="email" placeholder="Email" class="form-control">
      </div>
      <div class="form-group">
        <input name="password" type="password" placeholder="Mot de passe" class="form-control">
      </div>
        <button type="submit" class="btn btn-success">Se connecter</button>
    </form>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
