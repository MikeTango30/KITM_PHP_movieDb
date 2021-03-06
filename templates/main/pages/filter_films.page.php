<?php
$genres = getAllGenres() ?? [];
$movies = [];
$validationErrors = [];

if (isset($_GET["filter"])) {
      $validationErrors = validateGenre($_GET["genre"]);
    if (!$validationErrors) {
        $genreId = intval($_GET["genre"]);
        $movies = getMovieByGenre($genreId);
    }
}

?>
<div class="container-fluid">
  <div class="row justify-content-center">
    <h2>Filmai pagal žanrą</h2>
  </div>
  <div class="row justify-content-center">
    <div class="col col-md-3">
      <form>
        <input type="hidden" name="page" value="by_genre">
        <div class="form-group">
          <label for="genre">Žanras</label>
          <select class="custom-select mr-sm-2" name="genre" id="year">
            <option selected disabled>Pasirinkite žanrą</option>
              <?php foreach ($genres as $genre): ?>
                <option value="<?= $genre["id"] ?>"><?= $genre["genre_name"] ?></option>
              <?php endforeach; ?>
          </select>
        </div>
        <button type="submit" name="filter" class="btn btn-primary">Filtruoti</button>
      </form>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col errors">
        <?php if ($validationErrors): ?>
          <div class="alert alert-danger" role="alert">
            <ul>
                <?php foreach ($validationErrors as $validationError): ?>
                  <li><?= $validationError ?></li>
                <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>
    </div>
  </div>
  <table class="table table-bordered">
    <tr>
      <th>Filmo ID</th>
      <th>Pavadinimas</th>
      <th>Aprašymas</th>
      <th>Išleidimo metai</th>
      <th>Režisierius</th>
      <th>IMDB reitingas</th>
      <th>Žanras</th>
        <?php if ($movies): ?>
        <?php foreach ($movies

        as $movie): ?>
    <tr>
      <td><?= $movie["id"] ?></td>
      <td><?= ucfirst($movie["title"]) ?></td>
      <td><?= ucfirst($movie["description"]) ?></td>
      <td><?= ucfirst($movie["year"]) ?></td>
      <td><?= ucfirst($movie["director"]) ?></td>
      <td><?= $movie["imdb"] ?></td>
      <td><?= ucfirst($movie["genre_name"]) ?></td>
    </tr>
      <?php endforeach; ?>
      <?php endif; ?>
    </tr>
  </table>
</div>
