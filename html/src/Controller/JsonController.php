<?php

namespace App\Controller;


use App\Model\Patho;
use App\Model\SymptPatho;
use Core\Controller\BaseController;
use Core\View\View;
use Core\Database\Connection;

class JsonController extends BaseController {

  /**
   * Affiche le menu regroupant les différents fichiers JSON implémentés
   */
  public function index() {
    View::render('json_home.tpl');
  }

  /**
   * Affiche les descriptions des pathologies et leur idP
   */
  public function JsonPatho() {
    $this->arrayToRender(new Patho());
  }

  /**
   * Recupere les symptomes en fonction de l'idP fourni
   */
  public function JsonSymptPatho() {
    $symptPatho = new SymptPatho();
    $elem = $symptPatho->readOne($_GET['idp']);
    View::renderJSON($elem);
  }

  /**
   * Effectue le rendu d'un tableau en JSON
   * @param $model
   */
  private function arrayToRender($model) {
    $array = $model->read();
    View::renderJSON($array);
  }

}