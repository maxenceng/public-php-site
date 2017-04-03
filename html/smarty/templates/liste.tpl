{include file="header.tpl" title="Liste de pathologies"}
<div class="container liste-container">
    {if isset($smarty.session.email)}
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
    {/if}
    <div id="liste"></div>
</div>
{include file="footer.tpl"}
