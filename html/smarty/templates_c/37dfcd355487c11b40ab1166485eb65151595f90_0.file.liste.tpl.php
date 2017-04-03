<?php
/* Smarty version 3.1.30, created on 2017-02-13 10:48:00
  from "/var/www/html/smarty/templates/liste.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a18ee0c6de77_70030815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37dfcd355487c11b40ab1166485eb65151595f90' => 
    array (
      0 => '/var/www/html/smarty/templates/liste.tpl',
      1 => 1486982879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer_liste.tpl' => 1,
  ),
),false)) {
function content_58a18ee0c6de77_70030815 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <p class="elem"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</p>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer_liste.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
