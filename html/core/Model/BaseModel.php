<?php

namespace Core\Model;


use Core\Database\Connection;

abstract class BaseModel {

  protected $db;

  /**
   * On suppose que tous les modeles que l'on va utiliser
   * doivent se connecter a la base de donnee
   */
  public function __construct() {
    $this->db = new Connection();
  }

  /**
   * Fonction de lecture que les modeles doivent avoir par defaut
   */
  public abstract function read();

}