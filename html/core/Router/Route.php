<?php

namespace Core\Router;

class Route {


  private $path;
  private $callable;
  private $matches = [];
  private $params = [];

  /**
   * Constructeur de la classe
   * @param $path
   * @param $callable
   */
  public function __construct($path, $callable) {
    $this->path = trim($path, '/');
    $this->callable = $callable;
  }

  /**
   * Permet de donnes la forme que doivent avoir les parametres passees aux fonctions get et post du routeur
   * @param $param
   * @param $regex
   * @return $this
   */
  public function with($param, $regex) {
    $this->params[$param] = $regex;
    return $this;
  }

  /**
   * On vérifie que l'adresse attendue correspond bien à ce que l'on souhaite
   * @param $url
   * @return bool
   */
  public function match($url) {
    $url = trim($url, '/');
    $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
    $regex = "#^$path$#i";
    if(!preg_match($regex, $url, $matches)){
      return false;
    }
    array_shift($matches);
    $this->matches = $matches;
    return true;
  }

  /**
   * On fait appel au controleur pour gerer les donnees attendues
   */
  public function call() {
    if(is_string($this->callable)) {
      $params = explode('#', $this->callable); // On récupère le nom du controlleur et la méthode à utiliser
      $controller = "App\\Controller\\" . $params[0];
      $controller = new $controller(); // On appelle directement le controlleur pour pouvoir l'utiliser
      return call_user_func_array([$controller, $params[1]], $this->matches);
    } else {
      return call_user_func_array($this->callable, $this->matches);

    }
  }
}