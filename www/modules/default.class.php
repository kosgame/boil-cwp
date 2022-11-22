<?php
    
    class defaultKlasa extends Controller{
        
        private $numerki;
        private $smarty;
        private $template = 'default.tpl';
        
        public function __construct() {
            parent::__construct();
        }
        
        public function indexAction() {
            echo "Nie znazlazłem obiektu";
        }
        
        public function display() {
            
        }
        
    }
    
?>