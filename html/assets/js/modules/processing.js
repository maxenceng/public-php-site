/**
 * Cree un objet contenant la valeur transforme en tableau si necessaire
 * et renvoie egalement le type de la valeur
 * @param val
 * @returns {{type: string, res: *}}
 */
export default (val) => {
  let res
  val.includes('/') ? res = val.split('/') : res = val
  const type = typeof res
  return {
    type,
    res,
  }
}
