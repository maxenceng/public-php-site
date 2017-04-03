<?php

namespace App\Controller;

use Core\Controller\BaseController;

use Core\View\View;



class IndexController extends BaseController {

  /**
   * Fonction qui gere l'affichage suivant la valeur de la variable $_GET
   */
  public function index() {
    session_start();
    if(!isset($_GET['menu'])) {
      $this->home();
    } else {
      switch($_GET['menu']) {
        case 'signup':
          if(isset($_SESSION['email'])){
            View::redirect('/');
          } else {
            View::render('signup.tpl');
          }
          break;
        case 'login':
          if(isset($_SESSION['email'])) {
            View::redirect('/');
          } else {
            View::render('login.tpl');
          }
          break;
        case 'logout':
          session_start();
          session_destroy();
          View::redirect('/');
          break;
        default:
          $this->home();
          break;
      }
    }
  }


  /**
   * Fonction servant à éviter les répétitions dans le code dans la fonction index
   * Affiche simplement la page d'accueil avec la valeur de l'email de l'utilisateur connecté en parametre si un utilisateur est connecte
   * Affiche la page d'accueil avec le mot 'visiteur' sinon
   */
  private function home() {
    if(isset($_SESSION['email'])) {
      View::render('home.tpl', 'name', $_SESSION['email']);
    } else {
      View::render('home.tpl', 'name', 'visiteur');
    }
  }
}
