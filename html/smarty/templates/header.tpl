<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{$title|default:"Default Page Title"}</title>
</head>
<body>
<div style="display:none;">{session_start()}</div>
<header>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
            {if isset($smarty.session.email)}
                <li><a href="/?menu=logout">Se déconnecter</a></li>
            {else}
                <li><a href="/?menu=signup">S'inscrire</a></li>
                <li><a href="/?menu=login">Se connecter</a></li>
            {/if}
            <li><a href="/liste">Liste</a></li>
        </ul>
    </nav>
</header>
