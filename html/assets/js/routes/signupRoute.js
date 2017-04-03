/**
 * Ajoute simplement un message d'erreur si les donnees du formulaire
 * ne sont pas bonnes
 */
export default () => {
  if (document.querySelector('.error') === null) return
  switch (location.search) {
    case '?menu=signup&error=failRepeat':
      document.querySelector('.error').innerHTML = 'Vous n\'avez pas répétez correctement votre mot de passe'
      break
    case '?menu=signup&error=userExists':
      document.querySelector('.error').innerHTML = 'Un utilisateur avec cette adresse e-mail existe déjà'
      break
    default: break
  }
}
