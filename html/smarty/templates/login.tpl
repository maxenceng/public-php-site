{include "header.tpl" title="Se connecter"}
<div class="container">
  <h1>Se connecter</h1>
  <span class="error"></span>
  <form action="/login" method="post">
    <div>
      <label for="email">Email</label>
      <input id="email" name="email" type="email">
    </div>
    <div>
      <label for="password">Mot de passe</label>
      <input id="password" name="password" type="password">
    </div>
    <button type="submit">Se connecter</button>
  </form>
</div>
{include "footer.tpl"}
