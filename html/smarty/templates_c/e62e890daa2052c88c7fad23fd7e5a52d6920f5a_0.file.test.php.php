<?php
/* Smarty version 3.1.30, created on 2017-02-12 14:55:56
  from "/home/maxence/Documents/Projects/PHP/html/smarty/templates/test.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a0696c112bc5_06116719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e62e890daa2052c88c7fad23fd7e5a52d6920f5a' => 
    array (
      0 => '/home/maxence/Documents/Projects/PHP/html/smarty/templates/test.php',
      1 => 1486907755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a0696c112bc5_06116719 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>// Start the session
session_start();
<?php echo '?>';?>
<!DOCTYPE html>
<html>
<body>

<?php echo '<?php
';?>// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
<?php echo '?>';?>

</body>
</html><?php }
}
