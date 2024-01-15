<?php

$host="e-srv-lamp.univ-lemans.fr";

$user ="e2206068";

$database ="e2206068";

$password ="Mfn879vy";

$connection = new mysqli($host,$user,$password,$database);

if($connection->connect_error){

    die("connection failed:".$connection->connec_error);

}

$seletDataquery="SELECT * FROM `birthday-guests`";
$result = $connection->query($seletDataquery);

if ($result->num_rows  0) {

    $totalGuests = 0;
    while ($row = $result->fetch_assoc()) {

       

        echo "Nom: " . $row["Nom"] . " - Nombre: " . $row["Nombre"] . "<br>";



        

        $totalGuests += $row["Nombre"];

    }



    

    echo "<p>Le nombre total d'invités est : " . $totalGuests . "</p>";

} else {

    echo "Aucun résultat trouvé dans la base de données.";

}



$connection->close();  

?>