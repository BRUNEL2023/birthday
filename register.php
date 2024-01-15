<?php
    $host = "e-srv-lamp.univ-lemans.fr";
    $user = "e2304479";
    $database = "e2304479";
    $password = "Gbk719na";
   
    $connection = new mysqli($host, $user, $password, $database);
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['Nom'];
        $number = $_POST['Nombre'];

        $sql = "INSERT INTO `birthday-guests`  (Nom, Nombre) VALUES ('$name','$number')";

        if ($connection->query($sql) == TRUE) {
            echo "New birthday-guests  created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }
    
    $connection->close();
    ?>