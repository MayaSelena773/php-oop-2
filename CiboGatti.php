<?php

require_once __DIR__ . '/PetsProducts.php';

class CiboGatti extends PetsProducts {

    //override
    public $gusto;

    public function __construct($_marca, $_prodotto, $_animale, $_quantità, $_prezzo, $_gusto) {
        $this->marca = $_marca;
        $this->prodotto = $_prodotto;
        $this->animale = $_animale;
        $this->quantità = $_quantità;
        $this->prezzo = $_prezzo;
        $this->gusto = $_gusto;
    }

}

?>