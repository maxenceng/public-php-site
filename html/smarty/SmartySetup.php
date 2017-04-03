<?php
require dirname(__FILE__) . '/../../libs/Smarty/Smarty.class.php';


class SmartySetup extends Smarty
{
  public function __construct()
  {
    parent::__construct();
    // Definition des dossiers a utiliser
    $this->setTemplateDir('./smarty/templates');
    $this->setCompileDir('./smarty/templates_c');
    $this->setCacheDir('./smarty/cache');
    $this->setConfigDir('./smarty/configs');
  }

}
