<?php
	
    class trapez extends Controller{
        
        private $numerki;
        private $smarty;
        private $template = 'trapez.tpl';
        
        public function __construct() {
			parent::__construct();
			$this->numerki = Numerki::getInstance();
			$this->smarty = $this->numerki->getMember('smarty');
            $this->strona['nazwa'] = "Metoda Trapezów";
            $this->strona['opis'] = "W jaki sposób znajdujemy wartość całki?"; 
            $this->strona['opis_big'] = "Metoda trapezów daje dość dokładne wyniki, szczególnie przy dużej dokładności N. Polega ona na podzieleniu obszaru całowanego na x trapezów (przedziałów), których pola na końcu sumuje się.";
        }
        
        public function indexAction() {
            $xp =1;
            $xk = 4;
            $n = 3;
            $h = ($xk - $xp)/ $n; // krok
            $calka = 0;

            for($i=1; $i<$n;$i++){
                $calka += $this->fcalka($xp + $i*$h);
            }
            $calka += $this->fcalka($xp)/2;
            $calka += $this->fcalka($xk)/2;
            //$calka *= $h;
			
			$this->smarty->assign('strona', $this->strona);
            $this->smarty->assign('h', $h);
            $this->smarty->assign('calka', $calka);
            $this->smarty->display($this->template);

        }

        private function fcalka($x){
            return pow($x,3)+2;
        }
        

        public function liczAction() {

            //print_r($_POST);
            $funkcja = $_POST['funkcja'];
            $n = $_POST['n'];
            $xp = $_POST['xp'];
            $xk = $_POST['xk'];
            $h = ($xk - $xp)/ $n; // krok

            //
            

            $calka = 0;

            for($i=1; $i<=$n;$i++){
                $calka += $this->f2calka($funkcja, $xp + $i*$h)*$h;
            }

            $this->smarty->assign('podane', $podane);
            $this->smarty->assign('wynik', $wynik);
            $this->smarty->assign('strona', $this->strona);
            $this->smarty->display('lagrange-licz.tpl');

        }

         private function f2calka($funkcja, $x){
            return pow($x,3)+2;
        }
        

        
        
    }
    
?>