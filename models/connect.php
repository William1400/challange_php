<?php


try {
    $connect = new PDO("mysql:host=localhost;dbname=cogip;charset=utf8", 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
