<?php
/* Smarty version 3.1.30, created on 2017-02-13 07:09:48
  from "/var/www/html/smarty/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a15bbcd90b30_85499697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e0e4724136d976720a66c22147f4ae35fc05d6a' => 
    array (
      0 => '/var/www/html/smarty/templates/header.tpl',
      1 => 1486969760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a15bbcd90b30_85499697 (Smarty_Internal_Template $_smarty_tpl) {
echo session_start();?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "Default Page Title" : $tmp);?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Acupuncture</a>
          <?php if (isset($_SESSION['email'])) {?>
            <a href="/?menu=profile">Profile</a>
            <a href="/?menu=logout">Se déconnecter</a>
          <?php } else { ?>
            <a href="/?menu=signup">S'inscrire</a>
            <a href="/?menu=login">Se connecter</a>
          <?php }?>
          <a href="/liste">Liste</a>
        </div>
      </div>
    </nav>

<?php }
}
