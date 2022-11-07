<?php

class Phone {
public $producer;
public $year;
public $newModel;

function __construct($producer = null, $year = null, $newModel = null){
    $this->producer = $producer;
    $this->year = $year;
    $this->newModel = $newModel;
}

}
