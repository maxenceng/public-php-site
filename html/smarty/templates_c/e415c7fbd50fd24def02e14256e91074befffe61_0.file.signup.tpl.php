<?php
/* Smarty version 3.1.30, created on 2017-04-03 01:50:04
  from "/var/www/html/php/html/smarty/templates/signup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e18e2c139a13_89635811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e415c7fbd50fd24def02e14256e91074befffe61' => 
    array (
      0 => '/var/www/html/php/html/smarty/templates/signup.tpl',
      1 => 1491176897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58e18e2c139a13_89635811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"S'inscrire"), 0, false);
?>

<div class="container">
    <h1>S'inscrire</h1>
    <span class="error"></span>
    <form action="/signup" method="post">
        <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" required>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input id="password" name="password" type="password" required>
        </div>
        <div>
            <label for="repeat_password">Veuillez répéter votre mot de passe</label>
            <input id="repeat_password" name="repeat_password" type="password" required>
        </div>
        <button type="submit">Se connecter</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
