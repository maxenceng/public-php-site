<?php
/* Smarty version 3.1.30, created on 2017-02-15 23:49:48
  from "/home/maxence/Documents/Projects/PHP/html/smarty/templates/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a4db0cad8262_77616089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd1401b283eec2c8831728ee1fa5df2ccecc1320' => 
    array (
      0 => '/home/maxence/Documents/Projects/PHP/html/smarty/templates/home.tpl',
      1 => 1487198901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58a4db0cad8262_77616089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Page d'accueil"), 0, false);
?>

<div class="jumbotron">
      <div class="container">
        <h1>Bienvenue <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 sur notre super site d'acupuncture!</h1>
          <form id="search-form">
            <div class="input-group">
              <label for="search-input" class="sr-only">Rechercher</label>
              <input id="search-input" type="text" name="search-input" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Rechercher</button>
              </span>
            </div>
          </form>
        <p class="below">Dernier article concernant l'acupuncture.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Lire la suite</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
	        <div class="col-md-4">
	          <h2>Article</h2>
	          <p><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</p>
	          <p><a class="btn btn-default" href="#" role="button">Lire la suite</a></p>
	        </div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
