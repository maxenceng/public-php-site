<?php

namespace Core\View;

use SmartySetup;

require 'smarty/SmartySetup.php';


class View
{
  /**
   * Redirige vers une autre route s'il y a eu un probleme
   * @param $url
   * @param null $statusCode
   */
  static public function redirect($url, $statusCode = null) {
    header('Location: ' . $url, true, $statusCode);
    die();
  }

  /**
   * Affiche le contenu de la template voulue
   * Il est possible de passer des donnees a afficher en parametre
   * @param $template
   * @param null $name
   * @param null $data
   */
  static public function render($template, $name = null, $data = null) {
    $smarty = new SmartySetup();
    $smarty->assign($name, $data);
    $smarty->display($template);
  }

  /**
   * Effectue le rendu de donnees au format JSON
   * @param $array
   */
  static public function renderJSON($array) {
    echo json_encode($array, JSON_PRETTY_PRINT);
  }
}
