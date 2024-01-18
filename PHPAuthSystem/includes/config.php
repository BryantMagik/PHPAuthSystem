<?php

function dbConnection()
{
    $dbConnection = new mysqli("localhost", "bryan2820", "u!Vlc/BcE9YugHbJ", "bryanbbdd");
    if ($dbConnection->connect_error) {
        die('Conexión error ' . mysqli_connect_error());
    }
    return $dbConnection;
}


function dbLogin($email, $password)
{
    // Create connection
    $conn = dbConnection();
    $sql = "SELECT id,username,email,password FROM USER WHERE (password=md5('$password') and username='$email')";
    //Conectar a la base de datos y realizar consulta SQL para comprobar
    //si el usuario y contraseña son correctos.
    $result = $conn->query($sql);
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            
        }
    }
}

