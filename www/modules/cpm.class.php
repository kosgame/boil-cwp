<?php

class cpm extends Controller{

    private $numerki;
    private $smarty;
    private $template = 'cpm.tpl';

    public function __construct() {
        parent::__construct();
        $this->numerki = Numerki::getInstance();
        $this->smarty = $this->numerki->getMember('smarty');
        $this->strona['nazwa'] = "Metoda CPM";
        $this->strona['opis'] = "Metoda ścieżki krytycznej";
        $this->strona['opis_big'] = "Metoda planowania przedsięwzięć, projektów, które składają się z wielu czynności wykonywanych w ustalonej kolejności po sobie bądź równolegle.<br><br>";
        $this->strona['opis_big'] .= "W ramach tego modułu jesteśmy w stanie znaleźć:<br>";
        $this->strona['opis_big'] .= "- najwcześniejsze/najpóźniejsze momenty zakończenia i rozpoczęcia czynności<br>";
        $this->strona['opis_big'] .= "- rezerwy czasowe<br>";
        $this->strona['opis_big'] .= "- ścieżkę krytyczną<br>";
    }

    public function indexAction() {
        $xs = array(-2, -1, 0, 2, 4);
        $ys = array(-1, 0, 5, 99, -55);
        $rozmiar = 5;
        $wynik_zadanie = $this->newtonInterpolation($xs, $ys, $rozmiar);
        $wspolczynniki = $wynik_zadanie[0];
        $zadanie2 = "";

        for($i=0;$i<$rozmiar;$i++){
            $zadanie2 .= $wspolczynniki[$i]."<br>";
        }
        $value =1;

        $zadanie3 = $this->newtonResult($wspolczynniki, $xs, $value, $rozmiar);

        $this->smarty->assign('strona', $this->strona);
        $this->smarty->assign('wynik_zadanie', $wynik_zadanie[1]);
        $this->smarty->assign('zadanie2', $zadanie2);
        $this->smarty->assign('zadanie3', $zadanie3);
        $this->smarty->display($this->template);
    }


    public function liczAction() {
        $podane['x'] = $_POST['xs'];
        $podane['y'] = $_POST['ys'];
        $podane['punkt'] = $_POST['punkt'];

        // jak przepisac punkty w postaci 1,2,3,4 na tablicę elementów
        $xs = explode(',', $_POST['xs']);
        $ys = explode(',', $_POST['ys']);
        $punkt = $_POST['punkt'];
        $rozmiar=count($xs);

        $wynik_zadanie = $this->newtonInterpolation($xs, $ys, $rozmiar);
        $wspolczynniki = $wynik_zadanie[0];
        $zadanie2 = "";

        for($i=0;$i<$rozmiar;$i++){
            $zadanie2 .= $wspolczynniki[$i]."<br>";
        }

        $zadanie3 = $this->newtonResult($wspolczynniki, $xs, $punkt, $rozmiar);

        $this->smarty->assign('podane', $podane);
        $this->smarty->assign('strona', $this->strona);
        $this->smarty->assign('wynik_zadanie', $wynik_zadanie[1]);
        $this->smarty->assign('zadanie2', $zadanie2);
        $this->smarty->assign('zadanie3', $zadanie3);
        $this->smarty->display('newton-licz.tpl');
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

        $xs = explode(',', $zawartosc[1]);
        $ys = explode(',', $zawartosc[2]);
        $rozmiar = count($xs);

        $punkt = $zawartosc[0];
        $podane['x'] = $zawartosc[1];
        $podane['y'] = $zawartosc[2];
        $podane['punkt'] = $punkt;

        $wynik_zadanie = $this->newtonInterpolation($xs, $ys, $rozmiar);
        $wspolczynniki = $wynik_zadanie[0];
        $zadanie2 = "";

        for($i=0;$i<$rozmiar;$i++){
            $zadanie2 .= $wspolczynniki[$i]."<br>";
        }

        $zadanie3 = $this->newtonResult($wspolczynniki, $xs, $punkt, $rozmiar);

        $this->smarty->assign('podane', $podane);
        $this->smarty->assign('strona', $this->strona);
        $this->smarty->assign('wynik_zadanie', $wynik_zadanie[1]);
        $this->smarty->assign('zadanie2', $zadanie2);
        $this->smarty->assign('zadanie3', $zadanie3);
        $this->smarty->display('newton-plik.tpl');
    }


    private function newtonInterpolation($xs, $ys, $rozmiar) { // do obliczania współczynników
        $wsp[0] = $ys[0];
        $wynik = "";
        $indeks = 1;
        for ($i = 1; $i < $rozmiar; $i++) {
            $wynik.= "<br />Rzędu ".$i. "<br>";
            for ($j = 0; $j < $rozmiar - $i; $j++) {
                $ys[$j] = ($ys[$j + 1] - $ys[$j]) / ($xs[$j + $indeks] - $xs[$j]);
                $wynik .= "y[ " . $j.  " ] = " . $ys[$j] . "<br>";
            }
            $wsp[$indeks] = $ys[0];
            $indeks++;
        }

        $koniec = array($wsp, $wynik); // tablica  tablicą wyników i z tekstem
        return $koniec;
    }

    private function newtonResult($wsp, $x, $value, $rozmiar){ // do obliczania wartości
        $wynik = $wsp[0];
        $temp = 1;
        for ($i = 1; $i < $rozmiar; $i++) {
            $temp *= $value - $x[$i-1];
            $wynik += $temp*$wsp[$i];
        }
        return $wynik;
    }




}

?>