<?php
/* Smarty version 3.1.30, created on 2017-02-12 15:16:26
  from "/home/maxence/Documents/Projects/PHP/html/smarty/templates/test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a06e3aa54c93_77931261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d63c3ca92c84f24fc6f77917fda8bb92d0df40' => 
    array (
      0 => '/home/maxence/Documents/Projects/PHP/html/smarty/templates/test.tpl',
      1 => 1486908984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58a06e3aa54c93_77931261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"My Page Title"), 0, false);
?>

<div class="jumbotron">
    <div class="container">
        <?php if (isset($_SESSION['email'])) {?>
            <?php echo $_SESSION['email'];?>

        <?php }?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
