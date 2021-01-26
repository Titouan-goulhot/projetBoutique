<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=titouandb;', 'titouan', 'campus2021');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
