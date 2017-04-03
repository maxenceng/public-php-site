<?php

namespace Core\Database;

use PDO;

class Connection
{
  private $host;
  private $name;
  private $username;
  private $password;
  private $pdo;

  /**
   * Constructeur de la classe
   */
  public function __construct()
  {
    $this->host = "localhost";
    $this->name = "phpdev";
    $this->username = "root";
    $this->password = "root";
    session_start();
  }

  /**
   * On cree le PDO s'il n'existe pas, le recupere sinon
   * @return PDO
   */
  private function getPDO() {
    if($this->pdo === null) {
      $pdo = new PDO("mysql:host=$this->host;dbname=$this->name", $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->pdo = $pdo;
    }
    return $this->pdo;
  }

  /**
   * Permet de faire des query sur la base de donnee
   * @param $statement
   * @return array
   */
  public function query($statement) {
    $req = $this->getPDO()->query($statement);
    $datas = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor(); // Fermeture de connexion avec la base de donnee
    return $datas;
  }

  /**
   * Permet d'effectuer des insertions dans la base de donnee
   * @param $statement
   */
  public function insert($statement) {
    $this->getPDO()->exec($statement);
  }

}
