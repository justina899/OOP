<?php

class Coin {
private $country;
private $value;
private $yearOfManufacture;
private $material;

public function setCountry($country)
    {
        $this->country = $country;
    }

public function getCountry()
    {
        return $this->country;
    }

public function setValue($value)
    {
        $this->value = $value;
    }

public function getValue()
    {
        return $this->value;
    }

public function setYearOfManufacture($yearOfManufacture)
    {
        $this->yearOfManufacture = $yearOfManufacture;
    }

public function getYearOfManufacture()
    {
        return $this->yearOfManufacture;
    }

public function setMaterial($material)
    {
        $this->material = $material;
    }

public function getMaterial()
    {
        return $this->material;
    }



}




















?>