<?php
/* Smarty version 3.1.30, created on 2017-02-16 00:00:26
  from "/home/maxence/Documents/Projects/PHP/html/smarty/templates/liste.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a4dd8a396a20_96412718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd06604019d8b31b448b123acd85f044214b96be4' => 
    array (
      0 => '/home/maxence/Documents/Projects/PHP/html/smarty/templates/liste.tpl',
      1 => 1487199556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer_liste.tpl' => 1,
  ),
),false)) {
function content_58a4dd8a396a20_96412718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Liste de pathologies"), 0, false);
?>

<div class="jumbotron">
    <div class="container">
		<?php if (isset($_SESSION['email'])) {?>
		<input id="valChercher" type="search">
		<button id="chercher">Chercher</button>
		<select id="type">
			<option value="">tout afficher</option>
			<option value="méridien">méridien</option>
			<option value="organe/viscère">organe/viscère</option>
			<option value="merveilleux vaisseaux">merveilleux vaisseaux</option>
			<option value="jing jin">jing jin</option>
		</select>
		<select id="caracteristiques">
			<option value="">tout afficher</option>
			<option value="plein">plein</option>
			<option value="chaud">chaud</option>
			<option value="vide">vide</option>
			<option value="froid">froid</option>
			<option value="interne">interne</option>
			<option value="externe">externe</option>
		</select>
		<?php }?>
		<div id="liste">
				<p class="elem"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</p>
		</div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer_liste.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
