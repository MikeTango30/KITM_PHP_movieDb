<?php

if (isset($_GET["delete"])) {
  if (preg_match("/\d/", htmlspecialchars($_GET["delete"]))) {
      $deleteMovieId = htmlspecialchars($_GET["delete"]);
  }

}

if (isset($_GET["edit"])) {
    if (preg_match("/\d/", htmlspecialchars($_GET["edit"]))) {
        $editMovieId = htmlspecialchars($_GET["edit"]);
    }

}


try {
    if ($conn) {
        $stmt = $conn->query("SELECT movies.id, title, description, year, director, imdb, genre_name 
                                        FROM movies 
                                        JOIN genres ON movies.genre_id = genres.id");
        $movies = $stmt->fetchAll();
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
<div class="row justify-content-center">
  <h2>Filmų valdymas</h2>
</div>
<div class="container">
  <table class="table table-bordered">
    <tr>
      <th>Filmo ID</th>
      <th>Pavadinimas</th>
      <th>Aprašymas</th>
      <th>Išleidimo metai</th>
      <th>Režisierius</th>
      <th>IMDB reitingas</th>
      <th>Žanras</th>
      <th>Veiksmai</th>
        <?php foreach ($movies as $movie): ?>
    <tr>
      <td><?= $movie["id"] ?></td>
      <td><?= ucfirst($movie["title"]) ?></td>
      <td><?= ucfirst($movie["description"]) ?></td>
      <td><?= ucfirst($movie["year"]) ?></td>
      <td><?= ucfirst($movie["director"]) ?></td>
      <td><?= $movie["imdb"] ?></td>
      <td><?= ucfirst($movie["genre_name"]) ?></td>
      <td>
        <a href="?page=movie_control&delete=<?=$movie["id"]?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        <a href="?page=movie_control&edit=<?=$movie["id"]?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
      </td>
    </tr>
      <?php endforeach; ?>
    </tr>
  </table>
</div>