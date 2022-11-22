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
            $this->strona['opis_big'] = "To jest biblioteka numeryczna, która będzie wykorzystywana na zajęciach z metod numerycznych. Wszystkie metody są dostępne po przez menu. Każda metoda na ten moment ma sztywno podane dane, ale w przyszłości nastąpi rozwój tej biblioteki.";
			$this->smarty->assign('strona', $this->strona);
            $this->smarty->display($this->template);			
        }
        
    }
    
?>