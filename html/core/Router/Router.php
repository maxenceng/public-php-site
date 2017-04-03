<?php

namespace Core\Router;

use Core\View\View;

class Router {

  private $url;
  private $routes = [];

  public function __construct($url) {
    $this->url = $url;
  }

  /**
   * Fait appel a la fonction add avec la methode GET
   * @param $path
   * @param $callable
   * @return Route
   */
  public function get($path, $callable) {
    return $this->add($path, $callable, 'GET');
  }

  /**
   * Fait appel a la fonction add avec la methode POST
   * @param $path
   * @param $callable
   * @return Route
   */
  public function post($path, $callable) {
    return $this->add($path, $callable, 'POST');
  }

  /**
   * Ajoute la route aux chemins disponibles par notre serveur
   * @param $path
   * @param $callable
   * @param $method
   * @return Route
   */
  private function add($path, $callable, $method) {
    $route = new Route($path, $callable);
    $this->routes[$method][] = $route;
    return $route;

  }

  /**
   * Demarre le routeur
   */
  public function run(){
    if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
      View::redirect('/', 400); // La méthode à utiliser n'a été trouvée donc le client est redirigée vers l'index.
    }
    foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
      if($route->match($this->url)){
        return $route->call();
      }
    }
    View::redirect('/', 308); // Aucune route correcte n'a été trouvée donc le client est redirigée vers l'index.
  }

}
