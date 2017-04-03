<?php
/* Smarty version 3.1.30, created on 2017-04-03 03:08:41
  from "/var/www/html/php/html/smarty/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e1a099905c91_24118622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b953d73a3aa8ddc43ceaacead85b29b194633606' => 
    array (
      0 => '/var/www/html/php/html/smarty/templates/header.tpl',
      1 => 1491181700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e1a099905c91_24118622 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "Default Page Title" : $tmp);?>
</title>
</head>
<body>
<div style="display:none;"><?php echo session_start();?>
</div>
<header>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
            <?php if (isset($_SESSION['email'])) {?>
                <li><a href="/?menu=logout">Se déconnecter</a></li>
            <?php } else { ?>
                <li><a href="/?menu=signup">S'inscrire</a></li>
                <li><a href="/?menu=login">Se connecter</a></li>
            <?php }?>
            <li><a href="/liste">Liste</a></li>
        </ul>
    </nav>
</header>
<?php }
}
