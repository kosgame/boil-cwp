<?php
	
    class styczne extends Controller{
        
        private $numerki;
        private $smarty;
        private $template = 'styczne.tpl';
        
        public function __construct() {
			parent::__construct();
			$this->numerki = Numerki::getInstance();
			$this->smarty = $this->numerki->getMember('smarty');
            $this->strona['nazwa'] = "Metoda Newtona-Raphsona";
            $this->strona['opis'] = "W jaki sposób znajdujemy pierwiastek?"; 
            $this->strona['opis_big'] = "Wybieramy punkt startowy i dalej podobnie jak w stycznych.";
        }
        
        public function indexAction() {
           
			$a = -2;
			$b = 2;

			$wyna = $this->funkcja($a);
			$wynb = $this->funkcja($b);
			$koniec = 0;
			$dokladnosc = 0.002;
			$wynik = 0;
			$wartosc = 99;
			//$debug = "DEBUGGOWANIE:";
			if($wyna * $wynb < 0){
				$x1 = $a;
				//$debug .= "<br> X1: ".$x1;

				while(true){

					if($this->funkcja($x1) == 0 || abs($this->funkcja($x1)) <= $dokladnosc){
						$wynik = $x1;
						$wartosc = $this->funkcja($x1);
						break;
					}

					$x1 = $x1 - ($this->funkcja($x1) / $this->pochodna($x1));

					//$debug .= "<br> i: ".$i." X1: ".$x1;
					//$debug .= " Wynik: ".$this->funkcja($x1);

				}
			
			}

			
			$this->smarty->assign('strona', $this->strona);
            $this->smarty->assign('wynik', $wynik);
			$this->smarty->assign('wartosc', $wartosc);
			//$this->smarty->assign('debug', $debug);
            $this->smarty->display($this->template);

        }

        private function funkcja($x){
            return pow($x,3)-x+3; // x^3 - x + 1
        }

		private function pochodna($x){
            return 3*pow($x,2)-1; //3x^2 - 1
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