<?php
	
    class cramer extends Controller{
        
        private $numerki;
        private $smarty;
        private $template = 'cramer.tpl';
        
        public function __construct() {
			parent::__construct();
			$this->numerki = Numerki::getInstance();
			$this->smarty = $this->numerki->getMember('smarty');
            $this->strona['nazwa'] = "Wzory Cramera";
            $this->strona['opis'] = "Obliczamy układ 3 równań z 3 niewiadomymi"; 
            $this->strona['opis_big'] = "Wzory Cramera – twierdzenie określające postać rozwiązań oznaczonego układu równań liniowych o współczynnikach z ustalonego ciała (np. liczb rzeczywistych). Sformułowane zostało przez szwajcarskiego matematyka Gabriela Cramera w 1750 roku..";
        }
        
        public function indexAction() {
			$as = array(2, 4, 3);
            $bs = array(5, 2, 8);
            $cs = array(3 ,5 ,4);
            $ww = array(5, 4, 9);

            $wyznacznik_glowny = $this->obliczWyznacznik($as, $bs, $cs); // tylko 3 stopień
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

            $wyniki = 0;

            if($warunek == 0){
            	$error = "Układ nadaje się do obliczenia.";
            	$wynikx = $wyznacznik_x/$wyznacznik_glowny;
            	$wyniky = $wyznacznik_y/$wyznacznik_glowny;
            	$wynikz = $wyznacznik_z/$wyznacznik_glowny;
            	$wyniki = array($wynikx, $wyniky, $wynikz);
            }
          
         
            $wyznaczniki = array($wyznacznik_glowny, $wyznacznik_x, $wyznacznik_y, $wyznacznik_z);

			$this->smarty->assign('strona', $this->strona);
			$this->smarty->assign('wyznaczniki', $wyznaczniki);
			$this->smarty->assign('wyniki', $wyniki);
			$this->smarty->assign('warunek', $warunek);
			$this->smarty->assign('error', $error);
            $this->smarty->display($this->template);

        }

         public function liczAction() {

            $as = explode(',', $_POST['as']);
            $bs = explode(',', $_POST['bs']);
            $cs = explode(',', $_POST['cs']);
            $ww = explode(',', $_POST['ww']);

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
            $wyniki = 0;
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
            $this->smarty->display('cramer-licz.tpl');

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