<?php
/* Smarty version 3.1.30, created on 2017-04-02 23:59:54
  from "/var/www/html/php/html/smarty/templates/liste.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e1745a112638_56222664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ea7e2a20ed232ad068c877e8660bdee834fb12' => 
    array (
      0 => '/var/www/html/php/html/smarty/templates/liste.tpl',
      1 => 1491170393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58e1745a112638_56222664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Liste de pathologies"), 0, false);
?>

<div class="container liste-container">
    <?php if (isset($_SESSION['email'])) {?>
        <div>
            <input id="valChercher" type="search">
            <button id="chercher">Chercher</button>
        </div>
        <select id="type">
            <option value="">tout afficher</option>
            <option value="méridien">méridien</option>
            <option value="zang/fu">organe/viscère</option>
            <option value="Pathologie">merveilleux vaisseaux</option>
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
    <div id="liste"></div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
