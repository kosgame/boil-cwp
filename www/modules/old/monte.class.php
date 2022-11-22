<?php
	
    class monte extends Controller{
        
        private $numerki;
        private $smarty;
        private $template = 'monte.tpl';
        
        public function __construct() {
			parent::__construct();
			$this->numerki = Numerki::getInstance();
			$this->smarty = $this->numerki->getMember('smarty');
            $this->strona['nazwa'] = "Metoda Monte Carlo";
            $this->strona['opis'] = "W jaki sposób znajdujemy wartość całki?"; 
            $this->strona['opis_big'] = "Metoda Monte Carlo polega na wylosowaniu n punktów z przedziału całkowania a następnie obliczenie średniej wartości funkcji w tym przedziale.";
        }
        
        public function indexAction() {
            $xp =1;
            $xk = 5;
            $n = 4;

            $punkty = [1.5, 2.6, 3.8, 4.5];

            $calka = 0;

            for($i=0; $i<$n;$i++){
                $calka += $this->fcalka($this->losowy($xp, $xk));
            }
            $calka = ($calka / $n ) * ($xk - $xp); 

            $test = 0;

            for($i=0; $i<$n;$i++){
                $test += $this->fcalka($punkty[$i]);
            }
            $test = ($test / $n ) * ($xk - $xp); 
           			
			$this->smarty->assign('strona', $this->strona);
            $this->smarty->assign('calka', $calka);
            $this->smarty->assign('test', $test);
            $this->smarty->display($this->template);

        }

        private function fcalka($x){
            return pow($x,3)+2;
        }
        
        private function losowy($x,$y){
            return rand($x,$y);
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