import axios from 'axios'
import check from '../modules/check'
import { filterSearch } from '../modules/filters'

/**
 * Fonction permettant d'effectuer la recherche et la selection de filtres
 * en creant des event listeners sur les elements concernes
 */
export default () => {
  if (document.querySelector('#liste') !== null) {
    document.querySelector('footer').classList.add('hide-footer')
    axios.get('/json/pathologies')
      .then((res) => {
        let html = ''
        for (const element of res.data) {
          const elSlug = `${element.desc.toLowerCase().split(' ').join('-')}?idp=${element.idP}`
          html += `<p class="elem"><a href="/liste/${elSlug}">${element.desc}</a></p>`
        }
        document.querySelector('#liste').innerHTML = html
      })
    if (document.querySelector('#type') !== null) {
      document.querySelector('#type').addEventListener('change', check)
      document.querySelector('#caracteristiques').addEventListener('change', check)
      document.querySelector('#chercher').addEventListener('click', filterSearch)
      check()
    }
  }
}
