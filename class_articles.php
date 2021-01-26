<?php

//METTRE UN MAJUSCULE AU CLASS ! 
class Article

{
    private $id;
    private $name;
    private $description;
    private $price;
    private $picture;
    private $weight;
    private $quantity;
    private $available;

    public function __construct($id, $name, $description, $price, $picture, $weight, $quantity, $available)
    {

        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->picture = $picture;
        $this->weight = $weight;
        $this->quantity = $quantity;
        $this->available = $available;
    }
    public function getId()
    {
        return $this->id;
    }

    //Setter
    public function setName($new_name)
    {

        $this->name = $new_name;
    }
    // ATTENTION ecriture entre CAMEL CASE ET SNAKE_CASE
    public function getName()
    {
        return $this->name;
    }
    public function getdescription()
    {
        return $this->description;
    }
    public function getprice()
    {
        return $this->price;
    }
    public function getpicture()
    {
        return $this->picture;
    }

    public function getweight()
    {
        return $this->weight;
    }

    public function getquantity()
    {
        return $this->quantity;
    }
    public function getavailable()
    {
        return $this->available;
    }
}
