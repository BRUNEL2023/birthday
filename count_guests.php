<?php
    $host = "e-srv-lamp.univ-lemans.fr";
    $user = "e2304479";
    $database = "e2304479";
    $password = "Gbk719na";
   
    $connection = new mysqli($host, $user, $password, $database);
  // Récupération des données
  $stmt = $connection->query("SELECT nom, nombre FROM birthday_guests");
    $guests = $stmt->fetchAll();

// Calcul du nombre total d'invités
    $total = 0;
    foreach ($guests as $guest) {
    $total += $guest["nombre"];
    }

// Retourne le nombre total d'invités
    return $total;
?>