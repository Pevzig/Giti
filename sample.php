<?php
class Obdelava {
	
	public function __construct($beseda){
		$this -> javi($beseda);
	}
	
	public function javi($beseda){
		echo "Vaša beseda je ".$beseda;
	}

}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	if($besedilo = htmlspecialchars($_REQUEST['besedilo'])){
		$klas = new Obdelava("$besedilo");
	}
	else 
		echo "Vnesli niste ničesar!";
}

?>
