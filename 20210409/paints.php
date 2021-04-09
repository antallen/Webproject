<?php
include "clothes.php";

class Paint extends Clothes {
    private $length;
    private $waist;

    public function __construct($outsideName,$outsidePrize,$outsideLength,$outsideWaist){
        parent::__construct($outsideName,$outsidePrize);
        $this->length = $outsideLength;
        $this->waist = $outsideWaist;
    }

    public function getLength(){
        return $this->length;
    }

    public function getWaist(){
        return $this->waist;
    }

    public function doWash(){
        $string = "用手洗！再".parent::doWash();
        return $string;
        //return "用手洗！";
    }
    public function __destruct(){    
    }
}

?>