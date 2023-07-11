<?php

require 'db_conn.php';

$id = $_POST['cd_pokemon'];

$sql = 'DELETE FROM tb_pokemon WHERE cd_pokemon ='.$id;

if ($conn->query($sql) === TRUE) {
  header("Location: pokedex.html");
} else {
  echo "Error: ". $sqlDelete. "<br>" . $conn->error;
}


$conn->close();

?>