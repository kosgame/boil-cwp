<?php
	class Numerki {
	   
       static $_instance; //Instancja klasy
       private $startTime; //Czas rozpoczęcia skryptu
       private $members;

        /**
        * Numerki::getInstance()
        * Pobieramy istniejącą już instancję klasy. Jeżeli takowa nie istnieje to ją tworzymy
        * @return
        */
    
       public static function getInstance() {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
       }
       
       /**
        * Numerki::startApp()
        * Zaczynamy!
        * @return
        */

       public function startApp( $startTime ) {
        $this->startTime = $startTime;

		require_once('controller/Controller.php');
		require_once(SMARTY . 'Smarty.class.php');
		self::addMember('smarty', new Smarty());

        if(isset($_GET['strona'])) {
            $inc = explode('/', rtrim($_GET['strona'],'/'));
            $nazwaModulu = $inc[0];
            if(file_exists(STRONY . $nazwaModulu . '.class.php')) {
                require (STRONY . $nazwaModulu . '.class.php');
                $klasa = new $nazwaModulu;
                if(isset($inc[1]) && !empty($inc[1])) {
                    if(method_exists($klasa, $inc[1].'Action')) {
                        if(isset($inc[2])) {
                            $klasa->{$inc[1].'Action'}($inc[2]);
                        } else {
                            $klasa->{$inc[1].'Action'}();
                        }
                    } else {
                        $klasa->indexAction($inc[1]);
                    }
                } else {
                    $klasa->indexAction();
                }
            } else {
                require (STRONY . 'default.class.php');
                $klasa = new defaultKlasa;
                if(method_exists($klasa, $inc[0].'Action')) {
                    $klasa->{'indexAction'}();
                } else {
                    header('location: index.php');
                }
            }
        } else {
            require (STRONY . 'index.php');
            $klasa = new indexKlasa;
            $klasa->indexAction();
        }
        //$klasa->display();
       }
	    private function addMember($name, $value) {
        if(isset($this->members[$name])) {
            throw new Exception('Member '.$name.' already exists');
        } else {
            $this->members[$name] = $value;
        }
       }

       public function getMember($name) {
        if(!isset($this->members[$name])) {
            throw new Exception('Member '.$name.' does not exists');
        } else {
            return $this->members[$name];
        }
       }
	}
?>