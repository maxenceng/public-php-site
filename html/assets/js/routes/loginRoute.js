/**
 * Ajoute simplement un message d'erreur si les donnees du formulaire
 * ne sont pas bonnes
 */
export default () => {
  if (document.querySelector('.error') === null) return
  if (location.search === '?menu=login&error=true') {
    document.querySelector('.error').innerHTML = 'Identifiants incorrects'
  }
}
