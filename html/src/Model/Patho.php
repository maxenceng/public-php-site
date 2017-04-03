<?php

namespace App\Model;


use Core\Model\BaseModel;

class Patho extends BaseModel {
  public function __construct() {
    parent::__construct();
  }

  /**
   * Lit les informations que l'on souhaite utiliser dans la base de donnee
   * @return array
   */
  public function read() {
    $array = $this->db->query("SELECT P.idP, P.desc FROM patho P;");
    return $array;
  }

}
