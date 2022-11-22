<?php
  class Controller {
     
       private $numerki;
       private $smarty;
       protected $strona;
       public $settings = Array();
       
       public function __construct() {
        
        $this->numerki = Numerki::getInstance();
        $this->smarty = $this->numerki->getMember('smarty');
        $this->adres = ADRES;
        $this->smarty->setTemplateDir(STYL . 'default');
        $this->smarty->setCompileDir(STYL . 'default/compile');
        $this->smarty->debugging = false;
        $this->smarty->assign('adres', ADRES);


       }
       
  }
?>