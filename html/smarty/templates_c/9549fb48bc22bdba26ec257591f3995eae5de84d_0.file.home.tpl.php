<?php
/* Smarty version 3.1.30, created on 2017-04-03 02:34:56
  from "/var/www/html/php/html/smarty/templates/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e198b068efc3_02091196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9549fb48bc22bdba26ec257591f3995eae5de84d' => 
    array (
      0 => '/var/www/html/php/html/smarty/templates/home.tpl',
      1 => 1491179695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58e198b068efc3_02091196 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Page d'accueil"), 0, false);
?>

<div class="background"></div>
<div class="container home">
    <h2>Bienvenue <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 sur notre super site d'acupuncture!</h2>
</div>
<div class="container home">
    Ce site a été créé par :
    Jérémy Lambert,
    Corentin Raveane,
    De Benque Benoît,
    Grosjean Maxence
</div>
<div class="container home">
    Sources d'inspiration :
    <a href="https://www.grafikart.fr/">Grafikart(PHP)</a>
    <a href="https://www.youtube.com/user/hussey17">Brad Hussey(SASS)</a>
    <a href="https://scotch.io/">Scotch.io(Général)</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
