<?php
include('src/Zdarzenie.php');
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
        $this->strona['opis_big'] .= "- ścieżkę krytyczną";
    }

    public function indexAction() {
        $this->smarty->assign('strona', $this->strona);
        $this->smarty->display($this->template);
    }

    public function liczAction() {
        $kolejnoscType = $_POST['kolejnoscType'];
        $czynnosci = $_POST['czynnosci'];
        $czasy = $_POST['czasy'];
        $kolejnosci = $_POST['kolejnosc'];
        // głupie arrayki, lepiej mieć jedną z 3 kluczami

        if(!is_array($czynnosci) || !is_array($czasy) || !is_array($kolejnosci)){
            $this->smarty->assgin('error', "Błędne dane wejściowe");
            $this->smarty->display('cpm-error.tpl');
        }

        if((sizeof($czynnosci) != sizeof($czasy)) || sizeof($czasy) != sizeof($kolejnosci)) {
            $this->smarty->assgin('error', "Niepełne dane wejściowe");
            $this->smarty->display('cpm-error.tpl');
        }

        // array z danymi wejsciowymi
        $dane = [];
        for($i = 0; $i < sizeof($czynnosci); $i++){
            $row = [];
            $row['name'] = $czynnosci[$i];
            $row['czas'] = $czasy[$i];
            $row['kolejnosc'] = $kolejnosci[$i];
            $dane[] = $row;
        }

        if($kolejnoscType == 'zdarzenia'){
            $result = $this->calculateUsingZdarzenia($dane);
        } else {
            $result = $this->calculateUsingCzynnosci($dane);
        }
        $cp = $result->calculateCPM();


        $nexty = [];
        foreach ($result->srependencje as $srep) {
            $nexty[] = [$result->getActivity($srep[0])->id, $result->getActivity($srep[1])->id];
        }

        $activities = [];
        foreach ($result->activities as $activity) {
            $thisActiv = [];
            $thisActiv['key'] = $activity->id;
            $thisActiv['text'] = $activity->name;
            $thisActiv['length'] = $activity->duration;
            $thisActiv['earlyStart'] = $activity->es;
            $thisActiv['lateFinish'] = $activity->lf;
            $thisActiv['critical'] = $activity->critical;
            $activities[] = $thisActiv;
        }

        $this->smarty->assign('aktywnosci', $activities);
        $this->smarty->assign('kolejnosc', $nexty);
        $this->smarty->assign('strona', $this->strona);
        $this->smarty->display('cpm-wyniki.tpl');
    }

    private function calculateUsingCzynnosci($dane){
        $project = new Project([]);
        $result = '<br>';
        $aktywnosci = [];
        foreach ($dane as $czynnosc){
            $dependencje = [];
            $czysom = explode(',', $czynnosc['kolejnosc']);
            foreach ($czysom as $yes) {
                if($yes){
                    $dependencje[] = $project->getActivity($yes);
                }
            }
            $project->addActivity(new Activity($czynnosc['name'], $czynnosc['czas'], $dependencje));
        }

        return $project;
    }

    private function calculateUsingZdarzenia($dane){
        $project = new Project([]);
        $activities = [];
        foreach ($dane as $czynnosc){
            $prevzy = [];
            $czysom = explode('-', $czynnosc['kolejnosc']);
            foreach ($czysom as $yes) {
                if($yes){
                    $prevzy[] = $yes;
                }
            }
            $activities[] = array('id' => $czynnosc['name'], 'duration' => $czynnosc['czas'], 'prevZ' => $prevzy);
        }
        $activn = $this->przerobNaCzynnosci($activities);

        foreach ($activn as $activA){
            $dependencje = [];
            foreach ($activA['prev'] as $yes) {
                if($yes){
                    $dependencje[] = $project->getActivity($yes);
                }
            }
            $project->addActivity(new Activity($activA['id'], $activA['duration'], $dependencje));
        }
        return $project;

    }

    function przerobNaCzynnosci($activities) {
        $helpArrayStart = [];
        $arrayEndHelpers = [];
        // przerobienie czynnosci start and end milestone
        foreach ($activities as &$activity) {
            // jesli pierwsze wystąpienie
            foreach ($activity['prevZ'] as $key=> $zdarzenie) {
                if($key == 0){
                    $activity['prev'] = [];
                    foreach ($arrayEndHelpers as $helper){
                        if($helper['zdarzenie'] == $zdarzenie){
                            $activity['prev'][] = $helper['name'];
                        }
                    }
                } else {
                    $arrayEndHelpers[] = ['name' => $activity['id'], 'zdarzenie' => $zdarzenie];
                }
            }
        }
        return $activities;
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
        $this->smarty->display('newton-plik.tpl');
    }


}

?>