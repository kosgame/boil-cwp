<?php
	
    class simpson extends Controller{
        
        private $numerki;
        private $smarty;
        private $template = 'simpson.tpl';
        
        public function __construct() {
			parent::__construct();
			$this->numerki = Numerki::getInstance();
			$this->smarty = $this->numerki->getMember('smarty');
            $this->strona['nazwa'] = "Metoda Simpsona";
            $this->strona['opis'] = "W jaki sposób znajdujemy wartość całki?"; 
            $this->strona['opis_big'] = "W metodzie Simpsona funkcja podcałkowa jest przybliżana parabolą rozpiętą na dwóch krańcach przedziału całkowania oraz jego środku..";
        }
        
        public function indexAction() {
            $xp =1;
            $xk = 5;
            $n = 4;
            $h = ($xk - $xp)/ $n; // krok
            $calka = 0;
            $s = 0;

            for($i=1;$i<$n;$i++){
                $x = $xp + $i*$h;
                $s += $this->fcalka($x -$h / 2);
                $calka += $this->fcalka($x);
            }
            $s += $this->fcalka($xk - $h /2);
            $calka = ($h/6) * ($this->fcalka($xp) + $this->fcalka($xk) + 2*$calka + 4*$s);

			
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