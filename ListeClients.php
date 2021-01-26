<?php
require_once('Clients.php');
require_once('functions.php');
require_once('BDD.php');

class ListeClients
{
    private $liste_clients = array();

    public function __construct()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=titouandb;', 'titouan', 'campus2021', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $reponse = $bdd->query('SELECT * FROM customers');

        while ($data = $reponse->fetch()) {

            $customer = new Client($data['id'], $data['first_name'], $data['last_name']);
            array_push($this->liste_clients, $customer);
        }
    }

    public function getliste_clients()
    {
        return $this->liste_clients;
    }
}

$list = new ListeClients();
displayListeClients($list);
