<?php
session_start();
?>
<?php if($_SESSION["user"] === "admin"):?>

<?php
if (isset($_GET["edit"])) {
    if (isValidId(htmlspecialchars($_GET["edit"]))) {
        $editMovieId = htmlspecialchars($_GET["edit"]);
    }
}

$movies = getAllMovies();

?>
<div class="row justify-content-center">
  <h2>Filmų valdymas</h2>
</div>
<div class="row justify-content-center">
    <h3><a href="?page=add" class="btn btn-outline-primary mb-3">Pridėti filmą</a></h3>
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
      <td><?= $movie["imdb"]?></td>
      <td><?= ucfirst($movie["genre_name"]) ?></td>
      <td>
        <a href="?page=delete&delete=<?=$movie["id"]?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        <a href="?page=update&edit=<?=$movie["id"]?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
      </td>
    </tr>
      <?php endforeach; ?>
    </tr>
  </table>
</div>
<?php endif;?>