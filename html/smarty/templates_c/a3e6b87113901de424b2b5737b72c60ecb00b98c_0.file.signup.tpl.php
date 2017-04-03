<?php
/* Smarty version 3.1.30, created on 2017-02-12 14:33:08
  from "/home/maxence/Documents/Projects/PHP/html/smarty/templates/signup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a06414592dd3_28938800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3e6b87113901de424b2b5737b72c60ecb00b98c' => 
    array (
      0 => '/home/maxence/Documents/Projects/PHP/html/smarty/templates/signup.tpl',
      1 => 1486906386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58a06414592dd3_28938800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Signup"), 0, false);
?>

<div class="container">
    <div class="jumbotron">
        <h1>S'inscrire</h1>
        <form class="text-center" action="/signup" method="post">
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
