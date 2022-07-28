<?php

class PetsProducts {
    public $marca;
    public $prodotto;
    public $animale;
    public $quantità;
    public $prezzo;
    

    public function __construct($_marca, $_prodotto, $_animale, $_quantità, $_prezzo) {
        $this->marca = $_marca;
        $this->prodotto = $_prodotto;
        $this->animale = $_animale;
        $this->quantità = $_quantità;
        $this->prezzo = $_prezzo;
    }

    public function getInfo() {
        return "$this->marca $this->prodotto per $this->animale - $this->quantità a $this->prezzo";
    }
}


?>

<!--ciboumido, cibosecco, ciotola, cuccia, spazzola-->