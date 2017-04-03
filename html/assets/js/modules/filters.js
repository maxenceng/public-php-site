import processing from './processing'

/**
 * Map de correspondance des donnes des options du
 * premier select avec le second
 * @type {Map}
 */
const map = new Map()
map.set('méridien', ['interne', 'externe'])
map.set('zang/fu', ['plein', 'chaud', 'vide', 'froid'])

/**
 * Modifie les options disponibles dans le second select suivant
 * la valeur prise par le premier select
 * @param type
 */
export const filterCarac = (type) => {
  const elements = document.querySelectorAll('#caracteristiques > option')
  const selectClasses = document.querySelector('#caracteristiques').classList
  for (const element of elements) {
    map.get(type) === undefined ? selectClasses.add('hide-select') : selectClasses.remove('hide-select')
    if (map.get(type) !== undefined) {
      if (element.value === ''
        || element.value.includes(map.get(type)[0])
        || element.value.includes(map.get(type)[1])
        || element.value.includes(map.get(type)[2])
        || element.value.includes(map.get(type)[3])) {
        element.classList.remove('hide-option')
      } else {
        element.classList.add('hide-option')
      }
    }
  }
}

/**
 * Filtre la liste des elements suivant la valeur des 2 select
 * @param type
 * @param carac
 */
const filterListString = (type, carac) => {
  const elements = document.querySelectorAll('.elem')
  for (const element of elements) {
    if (element.innerHTML.includes(carac) && element.innerHTML.includes(type)) {
      element.style.display = 'block'
    } else {
      element.style.display = 'none'
    }
  }
}

/**
 * Filtre la liste des elements suivant la valeur des 2 select
 * @param type
 * @param carac
 */
const filterListObject = (type, carac) => {
  const elements = document.querySelectorAll('.elem')
  for (const element of elements) {
    const testOnType = element.innerHTML.includes(type[0]) || element.innerHTML.includes(type[1])
    if (element.innerHTML.includes(carac) && testOnType) {
      element.style.display = 'block'
    } else {
      element.style.display = 'none'
    }
  }
}

/**
 * Permet d'effectuer un traitement different suivant que l'on ait un type unique
 * ou deux types
 * @param type
 * @param carac
 */
export const filterList = (type, carac) => {
  const objType = processing(type)
  objType.type === 'string' ? filterListString(type, carac) : filterListObject(objType.res, carac)
}

/**
 * Effectue le filtre des elements avec la recherche personnalise
 */
export const filterSearch = () => {
  const valSearch = document.querySelector('#valChercher').value
  const elements = document.querySelectorAll('.elem')
  for (const element of elements) {
    if (element.innerHTML.toLowerCase().includes(valSearch.toLowerCase())) {
      element.style.display = 'block'
    } else {
      element.style.display = 'none'
    }
  }
}
