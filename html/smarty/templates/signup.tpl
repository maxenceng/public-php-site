{include "header.tpl" title="S'inscrire"}
<div class="container">
    <h1>S'inscrire</h1>
    <span class="error"></span>
    <form action="/signup" method="post">
        <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" required>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input id="password" name="password" type="password" required>
        </div>
        <div>
            <label for="repeat_password">Veuillez répéter votre mot de passe</label>
            <input id="repeat_password" name="repeat_password" type="password" required>
        </div>
        <button type="submit">Se connecter</button>
    </form>
</div>
{include "footer.tpl"}