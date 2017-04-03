<?php

namespace App\Model;


use Core\Model\BaseModel;

class SymptPatho extends BaseModel {

  public function __construct() {
    parent::__construct();
  }

  /**
   * Lit les informations que l'on souhaite utiliser dans la base de donnee
   * @return array
   */
  public function read() {
    $array = $this->db->query("SELECT * FROM symptPatho;");
    return $array;
  }

  /**
   * Lit les informations liant les 3 tables pour ressortir ce qui est important
   * c'est-a-dire la description des symptomes correspondant a une pathologie donnee
   * @param $idp
   * @return array
   */
  public function readOne($idp) {
    if(!isset($idp)) return;
    $elem = $this->db->query("SELECT S.desc FROM symptome S WHERE S.idS IN (SELECT P.idS FROM symptPatho P WHERE P.idP=$idp)");
    return $elem;
  }
}