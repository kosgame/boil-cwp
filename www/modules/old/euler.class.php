<?php
	
    class euler extends Controller{
        
        private $numerki;
        private $smarty;
        private $template = 'euler.tpl';
        
        public function __construct() {
			parent::__construct();
			$this->numerki = Numerki::getInstance();
			$this->smarty = $this->numerki->getMember('smarty');
            $this->strona['nazwa'] = "Metoda Eulera";
            $this->strona['opis'] = "Jedna z najprostszych metod rozwiązywania równań różniczkowych."; 
            $this->strona['opis_big'] = "Przyjmujemy że wartość dy/dx jest stała pomiędzy sąsiednimi punktami. Równanie więc aproksymuje się łamaną o odpowiednich wierzcholkach.";
        }
        
        public function indexAction() {

			$start = 0;
			$koniec = 0.4;
			$x = 0;
			$y = 1;
			$h = 0.1;
			$n = ($koniec - $start)/$h;
			$echo = "x: ".$x."\t y:".$y."<br>";
			$echox = $x."<br>";
			$echoy = $y."<br>";


			for($i = 0; $i<$n;$i++){
				$y = $y + $h*$this->feuler($x, $y);
				$x = $x+$h;
				$echox .=$x."<br>";
				$echoy .= $y."<br>";
				$echo .="x: ".$x."\t y:".$y."<br>";
			}
           
		
			$this->smarty->assign('echo', $echo);
			$this->smarty->assign('echox', $echox);
			$this->smarty->assign('echoy', $echoy);
			$this->smarty->assign('strona', $this->strona);
            $this->smarty->display($this->template);

        }

        private function feuler($x, $y){
            return $y;
        }
        

        public function liczAction() {

                     
            $start = $_POST['start'];
			$koniec = $_POST['koniec'];
			$x = floatval($start);
			$y = floatval($_POST['y']);
			$h = floatval($_POST['h']);
			$n = ($koniec - $start)/$h;

			$echo = "x: ".$x."\t y:".$y."<br>";
			$echox = $x."<br>";
			$echoy = $y."<br>";


			for($i = 0; $i<$n;$i++){
				$y = $y + $h*$this->feuler($x, $y);
				$x = $x+$h;
				$echox .=$x."<br>";
				$echoy .= $y."<br>";
				$echo .="x: ".$x."\t y:".$y."<br>";
			}
           
		
			$this->smarty->assign('echo', $echo);
			$this->smarty->assign('echox', $echox);
			$this->smarty->assign('echoy', $echoy);
			$this->smarty->assign('strona', $this->strona);
            $this->smarty->display('euler-licz.tpl');

        }

         private function f2calka($funkcja, $x){
            return pow($x,3)+2;
        }
        

        
        
    }
    
?>