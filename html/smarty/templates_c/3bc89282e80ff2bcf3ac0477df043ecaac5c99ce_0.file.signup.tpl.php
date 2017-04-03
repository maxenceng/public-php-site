<?php
/* Smarty version 3.1.30, created on 2017-02-14 14:07:41
  from "/var/www/html/smarty/templates/signup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a30f2db06f36_64108615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bc89282e80ff2bcf3ac0477df043ecaac5c99ce' => 
    array (
      0 => '/var/www/html/smarty/templates/signup.tpl',
      1 => 1487081246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58a30f2db06f36_64108615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"S'inscrire"), 0, false);
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
