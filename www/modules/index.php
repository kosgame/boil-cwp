<?php
	
    class indexKlasa extends Controller{
        
        private $numerki;
        private $smarty;
        private $template = 'index.tpl';
        
        public function __construct() {
			parent::__construct();
			$this->numerki = Numerki::getInstance();
			$this->smarty = $this->numerki->getMember('smarty');
        }
        
        public function indexAction() {

			$this->strona['nazwa'] = "Strona główna";
            $this->strona['opis'] = "Wybierz metodę z menu."; 
            $this->strona['opis_big'] = "To jest program zrealizowany na ćwiczeniach projektowych z przedmiotu Badania operacyjne i logistyka. Póki co w menu znajduje się tylko metoda CPM";
			$this->smarty->assign('strona', $this->strona);
            $this->smarty->display($this->template);			
        }
        
    }
    
?>