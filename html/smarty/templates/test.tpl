{include file="header.tpl" title="My Page Title"}
<div class="container">
    {if isset($smarty.session.email)}
        {$smarty.session.email}
    {/if}
</div>
{include file="footer.tpl"}
