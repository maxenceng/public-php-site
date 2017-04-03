<?php

namespace App\Controller;

use App\Model\User;
use Core\View\View;


class UserController {

  /**
   * Redirige l'utilisateur suivant la reussite ou non de la connexion d'un utilisateur existant
   */
  public function login() {
    $user = new User($_POST['email'], $_POST['password']);
    if($user->read()) {
      $_SESSION['email'] = $_POST['email'];
      View::redirect('/?menu=index');
    } else {
      View::redirect('/?menu=login&error=true');
    }
  }

  /**
   * Redirige l'utilisateur suivant la reuissite ou non de la creation d'un utilisateur
   */
  public function signup() {
    if($_POST['password'] !== $_POST['repeat_password']) {
      View::redirect('/?menu=signup&error=failRepeat');
      return;
    }
    $user = new User($_POST['email'], $_POST['password']);
    if($user->save()) {
      View::redirect('/?menu=index');
    } else {
      View::redirect('/?menu=signup&error=userExists');
    }
  }
}
