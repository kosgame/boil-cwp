<?php
	
    class heun extends Controller{
        
        private $numerki;
        private $smarty;
        private $template = 'heun.tpl';
        
        public function __construct() {
			parent::__construct();
			$this->numerki = Numerki::getInstance();
			$this->smarty = $this->numerki->getMember('smarty');
            $this->strona['nazwa'] = "Metoda Heuna";
            $this->strona['opis'] = "Metoda typu Rungego-Kutty";
            $this->strona['opis_big'] = "Modyfikacja metody Eulera. Polega na obliczaniu współczynnika nachylenia stycznej Delta y za pomocą średniej arytmetycznej:";
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
            $this->smarty->display('heun-licz.tpl');

        }

        private function f2calka($funkcja, $x){
            return pow($x,3)+2;
        }

        public function plikAction(){

            move_uploaded_file($_FILES['plik']['tmp_name'],
                $_SERVER['DOCUMENT_ROOT'].'szapala/numeryczne/foto/'.$_FILES['plik']['name']);
            $plik = fopen($_SERVER['DOCUMENT_ROOT'].'szapala/numeryczne/foto/'.$_FILES['plik']['name'],'r');


            $i = 0;
            while(!feof($plik))
            {
                $linia = fgets($plik);
                $zawartosc[$i] = $linia;
                $i++;
            }

            $as = explode(',', $zawartosc[0]);
            $bs = explode(',', $zawartosc[1]);
            $cs = explode(',', $zawartosc[2]);
            $ww = explode(',', $zawartosc[3]);

            $wyznacznik_glowny = $this->obliczWyznacznik($as, $bs, $cs);
            $wyznacznik_x = $this->obliczWyznacznik($ww, $bs, $cs);
            $wyznacznik_y = $this->obliczWyznacznik($as, $ww, $cs);
            $wyznacznik_z = $this->obliczWyznacznik($as, $bs, $ww);

            $warunek = $this->sprawdzWarunek($wyznacznik_glowny, $wyznacznik_x, $wyznacznik_y, $wyznacznik_z);

            if($warunek == 1){
                $error = "Układ jest sprzeczny.";
            }

            if($warunek == 2){
                $error = "Układ jest nieoznaczony.";
            }
            $wyniki = array();

            if($warunek == 0){
                $error = "Układ nadaje się do obliczenia.";
                $wynikx = $wyznacznik_x/$wyznacznik_glowny;
                $wyniky = $wyznacznik_y/$wyznacznik_glowny;
                $wynikz = $wyznacznik_z/$wyznacznik_glowny;
                $wyniki = array($wynikx, $wyniky, $wynikz);
            }

            $podane['x'] = $as;
            $podane['y'] = $bs;
            $podane['z'] = $cs;
            $podane['ww'] = $ww;
            $wyznaczniki = array($wyznacznik_glowny, $wyznacznik_x, $wyznacznik_y, $wyznacznik_z);

            $this->smarty->assign('strona', $this->strona);
            $this->smarty->assign('wyznaczniki', $wyznaczniki);
            $this->smarty->assign('wyniki', $wyniki);
            $this->smarty->assign('podane', $podane);
            $this->smarty->assign('warunek', $warunek);
            $this->smarty->assign('error', $error);
            $this->smarty->display('cramer-plik.tpl');
        }

        private function obliczWyznacznik($as,$bs,$cs){
        	$wartosc = $as[0]*$bs[1]*$cs[2] + $bs[0]*$cs[1]*$as[2] + $cs[0]*$as[1]*$bs[2] - ($cs[0]*$bs[1]*$as[2] + $as[0]*$cs[1]*$bs[2] + $bs[0]*$as[1]*$cs[2]);
        	return $wartosc;
        }

        private function sprawdzWarunek($w1, $wx, $wy, $wz){
        	if(($w1 == 0) && ($wx == 0 || $wy == 0 || $wz == 0)){
        		return 1;
        	} else {
        		return 0;
        	}

        	if(($w1 == 0) && ($wx == 0)  && ($wy == 0)  && ($wz == 0)){
        		return 2;
        	} else {
        		return 0;
        	}
        }    
        
    }
    
?>