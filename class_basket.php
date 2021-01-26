<?php

include_once('catalogue.php');
include_once('functions.php');
include_once('BDD.php');

class basket
{

    private $panier = [];

    public function getPanier()
    {
        return $this->panier;
    }


    public function addPanier($id_Products)
    {
        $_SESSION['panier'][$id_Products] = 1;
    }


    public function updatePanier($id_Products, $quantity)
    {
        foreach ($this->panier as $id_Products->$item) {
            if ($id_Products === $item['id']) {
                $this->panier[$id_Products]['quantity'] = $quantity;
            }
        }
    }

    public function erasePanier($id_Products)
    {
        foreach ($this->panier as $key->$item) {
            if ($id_Products === $item['id']) {
                unset($this->panier[$key]);
            }
        }
    }
}






   /* $panierAFaire = $panier->getPanier();
    if(isset($panierAFaire)) {
        foreach ($panierAFaire as $item){
            $sql = 'insert into orders (number, customers_id, date) VALUES (:number, customers_id, date)';
            $req = $pdo->prepare($sql);
            $req = bindParam( ':number', '0000000007');
            $req = bindParam( ':customer_id' , 1);
            $req->execute();
            $idOrder = $pdo->LastInsertId();

            $sqlOrderProduct = 'insert into order_product(order_id,product_id, quantity) Values (:order_id, :product_id, :quantity)';
            $sqlOrderProduct = $pdo->prepare
        } */
