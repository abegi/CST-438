<?php

class CoinModel {

    private $Id;
    
    private $H1Text;

    private $ImageUrl;

    private $Algorithm;

    private $Name;

    private $Description;

    private $Symbol;

    public function ___construct($id, $h1Text, $imageUrl, $algorithm, $name, $description, $symbol)
    {
        $this->Id = $id;
        $this->H1Text = $h1Text;
        $this->ImageUrl = $imageUrl;
        $this->Algorithm = $algorithm;
        $this->Name = $name;
        $this->Description = $description;
        $this->Symbol = $symbol;
    }

    public function setId($id)
    {
        $this->Id = $id;
    }

    public function setH1Text($h1Text)
    {
        $this->H1Text = $h1Text;
    }

    public function setImageUrl($imageUrl)
    {
        $this->ImageUrl = $imageUrl;
    }

    public function setAlgorithm($algorithm)
    {
        $this->Algorithm = $algorithm;
    }

    public function setName($name)
    {
        $this->Name = $name;
    }

    public function setDescription($description)
    {
        $this->Description = $description;
    }

    public function setSymbol($symbol)
    {
        $this->Symbol = $symbol;
    }
    public function getId()
    {
        $id = $this->Id;
        return $id;
    }

    public function getH1Text()
    {
        $h1Text = $this->H1Text;
        return $h1Text;
    }

    public function getImageUrl()
    {
        $imageUrl = $this->ImageUrl;
        return $imageUrl;
    }

    public function getAlgorithm()
    {
        $algorithm = $this->Algorithm;
        return $algorithm;
    }

    public function getName()
    {
        $name = $this->Name;
        return $name;
    }

    public function getDescription()
    {
        $description = $this->Description;
        return $description;
    }

    public function getSymbol()
    {
        $symbol = $this->Symbol;
        return $symbol;
    }

}

?>