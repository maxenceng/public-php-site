<?php

namespace App\Controller;

use Core\Controller\BaseController;
use Core\View\View;


class WsController extends BaseController {

  /**
   * Page basique d'accueil du webservice de calculatrice
   */
  public function index() {
    View::render('calc_home.tpl');
  }

  /**
   * Fait la somme des 2 parametres
   * @param $num1
   * @param $num2
   */
  public function add($num1, $num2) {
    echo $num1 + $num2;
  }

  /**
   * Fait la soustraction des 2 parametres
   * @param $num1
   * @param $num2
   */
  public function sub($num1, $num2) {
    echo $num1 - $num2;
  }

  /**
   * Fait la multiplication des 2 parametres
   * @param $num1
   * @param $num2
   */
  public function mult($num1, $num2) {
    echo $num1 * $num2;
  }

  /**
   * Fait la division des 2 parametres
   * @param $num1
   * @param $num2
   */
  public function div($num1, $num2) {
    echo $num1 / $num2;
  }
}