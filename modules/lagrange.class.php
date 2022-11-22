<?php
	
    class Lagrange extends Controller{
        
        private $numerki;
        private $smarty;
        private $template = 'lagrange.tpl';
        
        public function __construct() {
			parent::__construct();
			$this->numerki = Numerki::getInstance();
			$this->smarty = $this->numerki->getMember('smarty');
            $this->strona['nazwa'] = "Interpolacja Lagrange`a v2";
            $this->strona['opis'] = "W jaki sposób znajdujemy wielomian?"; 
            $this->strona['opis_big'] = "Najpierw ustalmy pewne punkty, dla których łatwo obliczyć pierwiastek. Trzeba to zrobić w taki sposób, aby szukana liczba była w środku tego przedziału. Punktów musi być co najmniej 3. Im więcej ich będzie, tym oszacowanie będzie dokładniejsze.<br /> Na ich podstawie tworzymy z wzoru wielomian interpolacyjny Lagrange'a, a potem obliczamy jego wartość w zadanym punkcie.";
        }
        
        public function indexAction() {
            //Dane z zajęć
			$xs = array(1, 3, 5); // tablica z 3 elementami
            $ys = array(12, 4, 4); // tablica z 3 wartościami
            $punkt = 4; // szukany punkty
            $wynikzadania = $this->lagrangeInterpolation($xs, $ys, $punkt);
			
			$this->smarty->assign('strona', $this->strona);
			$this->smarty->assign('wynik_zadanie', $wynikzadania);
            $this->smarty->display($this->template);


        }

        public function liczAction() {

            //print_r($_POST);
            $podane['x'] = $_POST['xs'];
            $podane['y'] = $_POST['ys'];
            $podane['punkt'] = $_POST['punkt'];

            // jak przepisac punkty w postaci 1,2,3,4 na tablicę elementów
            $xs = explode(',', $_POST['xs']);
            $ys = explode(',', $_POST['ys']);
            $punkt = $_POST['punkt'];

            $wynik = $this->lagrangeInterpolation($xs, $ys, $punkt);

            $this->smarty->assign('podane', $podane);
            $this->smarty->assign('wynik', $wynik);
            $this->smarty->assign('strona', $this->strona);
            $this->smarty->display('lagrange-licz.tpl');

            //$this->smarty->display($this->template);

        }

        public function plikAction(){
            move_uploaded_file($_FILES['plik']['tmp_name'],
                $_SERVER['DOCUMENT_ROOT'].'szapala/numeryczne/foto/'.$_FILES['plik']['name']);
            $plik = fopen('/szapala/numeryczne/foto/'.$_FILES['plik']['name'],'r');


            $i = 0;
            while(!feof($plik))
            {
                $linia = fgets($plik);
                $zawartosc[$i] = $linia;
                $i++;
            }

            $xs = $zawartosc[1];
            $ys = $zawartosc[2];

            $xs = explode(',', $zawartosc[1]);
            $ys = explode(',', $zawartosc[2]);
            $punkt = $zawartosc[0];

            $wynik = $this->lagrangeInterpolation($xs, $ys, $punkt);

            $podane['x'] = $zawartosc[1];
            $podane['y'] = $zawartosc[2];

            $this->smarty->assign('podane', $podane);
            $this->smarty->assign('wynik', $wynik);
            $this->smarty->assign('strona', $this->strona);
            $this->smarty->display('lagrange-plik.tpl');


        }

        private function lagrangeInterpolation($xs, $ys, $punkt){
            $y=0;
            $ile_x = count($xs); // ile jest punktów
            $wynik = 0;

            for($i=0; $i<$ile_x; $i++){ // petla tyle razy ile jest punktów
                $wynik_dla_i=1.0;
                for($j=0; $j<$ile_x; $j++){ // dla każdego punktu robimy iloczyny kartezjańskie
                    if($j != $i){ //
                        $wynik_dla_i=$wynik_dla_i*(($punkt - $xs[$j])/($xs[$i] - $xs[$j]));
                    }
                }
                $wynik += $wynik_dla_i*$ys[$i];
            }

            return $wynik;
        }


        

        
        
    }
    
?>