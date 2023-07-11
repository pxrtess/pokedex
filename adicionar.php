<?php
require 'db_conn.php';
$nm_pokemon = $_GET['nm_pokemon'];
$ds_tipo1 = $_GET['ds_tipo1'];
$ds_tipo2 = $_GET['ds_tipo2'];
$url_img = $_GET['url_img'];

$sql = 'INSERT INTO tb_pokemon(nm_pokemon, ds_tipo1, ds_tipo2, url_img)
VALUES ('. "'" . $nm_pokemon . "'" .', '. "'" .$ds_tipo1 . "'" .', '. "'" . $ds_tipo2 . "'" .', '. "'". $url_img . "'" .')';


if($conn->query($sql) === TRUE) {
    header("Location: pokedex.html");
} else {
    echo "Error: ". $sql. "<br>" . $conn->error;
}

$conn->close();

?>