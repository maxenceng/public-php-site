<?php

namespace App\Controller;


use App\Model\Sympt;
use Core\Controller\BaseController;
use Core\View\View;


class ListController extends BaseController {

  /**
   * Affiche la liste des pathologies
   */
  public function index() {
    View::render('liste.tpl');
  }

  /**
   * Affiche les symptomes lies a la pathologie
   */
  public function showOne() {
    $patho = str_replace('liste/', '', $_GET['url']);
    $patho = str_replace('-', ' ', $patho);
    View::render('pathoInfo.tpl', 'patho', $patho);
  }
}
