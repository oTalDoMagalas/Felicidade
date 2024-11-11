<?php

    $servename = "localhost";
    $username = "root";
    $password = "";
    $dbname = "felicidade";

    $conn = new mysqli($servename, $username, $password, $dbname);

if ($conn -> connect_error){

    echo "erro da conexão" . $conn -> $conn -> connect_error;

} else {
    echo "";
}
?>