import axios from 'axios'

/**
 * Fonction qui cherche dans le fichier JSON les donnees correspondants a la pathologie voulue
 */
export default () => {
  if (document.querySelector('#symptomes') !== null) {
    axios.get(`/json/symptpatho${location.search}`)
      .then((res) => {
        let html = ''
        for (const element of res.data) {
          html += `<p class="elem">${element.desc}</p>`
        }
        document.querySelector('#symptomes').innerHTML = html
      })
  }
}

