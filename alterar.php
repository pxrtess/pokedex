<?php

require 'db_conn.php';

$cd_pokemon = $_GET['cd_pokemon'];
$nm_pokemon =  $_GET['nm_pokemon'];
$ds_tipo1 =  $_GET['ds_tipo1'];
$ds_tipo2 =  $_GET['ds_tipo2'];
$url_img =$ $_GET['url_img'];


if (!$conn){
  echo ("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE tb_pokemon SET nm_pokemon='$nm_pokemon',ds_tipo1='$ds_tipo1',ds_tipo2='$ds_tipo2',url_img='$url_img' WHERE cd_pokemon= $cd_pokemon";

if (mysqli_query($conn, $sql)) {

  echo "Recor$ tpdated!successfulmy�";

} else {

  echo "Error u`dating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>