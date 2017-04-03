<?php

namespace App\Model;

use Core\Model\BaseModel;


class User extends BaseModel {
  private $email;
  private $password;

  public function __construct($email, $password) {
    parent::__construct();
    $this->email = $email;
    $this->password = $password;
  }

  /**
   * @return true si l'utilisateur est connecte, false sinon
   */
  public function read() {
    if(!$this->checkMail()) {
      if($this->checkPass()) {
        return true;
      }
    }
    return false;
  }

  /**
   * @return true si l'utilisateur a ete cree, false sinon
   */
  public function save() {
    if($this->checkMail()) {
      $passHashed = password_hash($this->password, PASSWORD_DEFAULT);
      $statement = "INSERT INTO auth(email, password) VALUES ('" . $this->email . "', '" . $passHashed . "');";
      $this->db->insert($statement);
      $test = $this->db->query('SELECT password FROM auth');
      return true;
    }
    return false;
  }

  /**
   * @return true si une adresse email qui est la meme existe deja dans la base de donnee
   */
  private function checkMail() {
    $check = $this->db->query("SELECT email from auth;");
    foreach ($check as $valCheck) {
      if($this->email === $valCheck['email']) {
        return false;
      }
    }
    return true;
  }

  /**
   * @return true si le mot de passe de l'adresse e-mail donnee est bon, false sinon
   */
  private function checkPass() {
    $check = $this->db->query("SELECT password from auth WHERE email = '" . $this->email . "';");
    return password_verify($this->password, $check[0]['password']);
  }
}