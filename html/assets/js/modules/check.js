import { filterCarac, filterList } from './filters'

/**
 * Verifie les donnes qu'il faut afficher suivant les filtres imposes
 */
export default () => {
  const valType = document.querySelector('#type').value
  if (valType === '') {
    document.querySelector('#caracteristiques').value = ''
  }
  const valCarac = document.querySelector('#caracteristiques').value
  filterList(valType, valCarac)
  filterCarac(valType)
}
