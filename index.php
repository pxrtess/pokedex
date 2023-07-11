<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/style.css">
  <title>Pokemons</title>
</head>

<body>
  <nav class="navbar bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="Bootstrap" width="75%" height="75%" style="margin: auto;">
      </a>
    </div>
    <form method="post" action='pokedex.html' style="text-align: center;">
      <button type="submit" class="btn btn-primary" style="margin-top:34px;margin-bottom:30px;">Voltar</jutton>
    </form>
  </nav>
  <?php
  require 'db_conn.php';
  $sql = "SELECT cd_pokemon, nm_pokemon, ds_tipo1, ds_tipo2, url_img FROM tb_pokemon";
  $result = $conn->query($sql);
  echo '<section class="pokemons">';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<br>";
      echo '
            <div class="card" style="width: 13rem; text-align: center; margin: auto;"><img src="' . $row["url_img"] . '" class="img-top" alt="' . $row["nm_pokemon"] . '">
              <div class="card-body"><h6 class-"card-title">' . "ID: " . '' . $row["cd_pokemon"] . '</h6>
                <h5 class="card-title">' . $row["nm_pokemon"] . '</h5><h5 class="card-title">' . "tipagem:" . '</h5>
                <p class="card-text">' . $row["ds_tipo1"] . "/" . $row["ds_tipo2"] . '</p>
              </div>
            </div>';
    }
  } else {
    echo "0 results";
  }
  echo '</section>';


  $conn->close();

  ?>

</body>

</html>