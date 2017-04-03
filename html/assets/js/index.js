import infoRoute from './routes/infoRoute'
import listeRoute from './routes/listeRoute'
import loginRoute from './routes/loginRoute'
import signupRoute from './routes/signupRoute'

// Importation du fichier sass pour n'avoir qu'un fichier pour tout nos elements a charger
import '../sass/main.sass'

/**
 * Chaque fonction appelee va agir uniquement sur la route voulue
 */
infoRoute()
listeRoute()
loginRoute()
signupRoute()
