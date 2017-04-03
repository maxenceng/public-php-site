<?php

namespace App\Controller;


use Core\Controller\BaseController;

class AssetsController extends BaseController {

  /**
   * Permet d'implementer notre bundle cree par Webpack sur notre serveur
   */
  public function index()
  {
    $path = __DIR__ . '/../../public/bundle.js';
    $file = fopen($path, 'r');
    echo fread($file, filesize($path));
    fclose($file);
  }
}