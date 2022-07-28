<?php

require_once __DIR__ . '/PetsProducts.php';

class CiotolaPets extends PetsProducts {

    //override
    public $dimensione;

    public function __construct($_marca, $_prodotto, $_animale, $_quantità, $_prezzo, $_dimensione) {
        $this->marca = $_marca;
        $this->prodotto = $_prodotto;
        $this->animale = $_animale;
        $this->quantità = $_quantità;
        $this->prezzo = $_prezzo;
        $this->dimensione = $_dimensione;
    }

}

?>