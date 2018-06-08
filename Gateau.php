<?php

class Gateau{

    private $ingredient;
    private $lait;

    //public function __construct(){}

    public function __construct($i,$l){
        $this->setIngredient($i);
        $this->setLait($l);
    }

    /*setters*/
    public function setIngredient($i){
        $this->ingredient = $i;
    }

    public function setLait($l){
        $this->lait = $l;
    }

    /*getters*/
    public function getIngredient(){
        return $this->ingredient;
    }

    public function getLait(){
        return $this->lait;
    }

    public function toString(){
        return $this->ingredient . ' - ' . $this->lait;
    }
}


?>