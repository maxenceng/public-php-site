<?php
/* Smarty version 3.1.30, created on 2017-02-15 23:57:45
  from "/home/maxence/Documents/Projects/PHP/html/smarty/templates/index/signup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a4dce9ecf0e9_50009904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3f57da7a9e61d00cb4e0dffcaa0f5d8e5fd48dd' => 
    array (
      0 => '/home/maxence/Documents/Projects/PHP/html/smarty/templates/index/signup.tpl',
      1 => 1487197735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/header.tpl' => 1,
    'file:../partials/footer.tpl' => 1,
  ),
),false)) {
function content_58a4dce9ecf0e9_50009904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"S'inscrire"), 0, false);
?>

<div class="container">
    <div class="jumbotron">
        <h1>S'inscrire</h1>
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
