<?php
/* Smarty version 3.1.30, created on 2017-02-15 23:57:46
  from "/home/maxence/Documents/Projects/PHP/html/smarty/templates/index/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a4dcea942cd9_75574036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69a87fb8f7cde07785e01099213b9c4a7ae52073' => 
    array (
      0 => '/home/maxence/Documents/Projects/PHP/html/smarty/templates/index/login.tpl',
      1 => 1487197741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/header.tpl' => 1,
    'file:../partials/footer.tpl' => 1,
  ),
),false)) {
function content_58a4dcea942cd9_75574036 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Se connecter"), 0, false);
?>

<div class="container">
  <div class="jumbotron">
    <h1>Se connecter</h1>
    <form class="text-center" action="../../../index.php" method="post">
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
<?php $_smarty_tpl->_subTemplateRender("file:../partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
