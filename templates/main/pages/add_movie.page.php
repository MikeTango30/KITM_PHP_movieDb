<?php

try {
    if ($conn) {
        $query = "SELECT * FROM genres";
        $stmt = $conn->query($query);
        $genres = $stmt->fetchAll();
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}


$validationErrors = [];
if (isset($_POST["add"])) {
    //Validation
    if (!preg_match("/\w{1,100}/", htmlspecialchars($_POST["title"]))) {
        $validationErrors[] = "Title is required";
    }
    if (!preg_match("/\w{1,100}/", htmlspecialchars($_POST["description"]))) {
        $validationErrors[] = "Description is not valid";
    }
    if (!preg_match("/\w{1,100}/", htmlspecialchars($_POST["director"]))) {
        $validationErrors[] = "Director is not valid";
    }
    if (!preg_match("/^\d\.\d$/", htmlspecialchars($_POST["imdb"]))) {
        $validationErrors[] = "Rating is not valid";
    }
    if (empty(htmlspecialchars($_POST["year"]))) {
        $validationErrors[] = "Year is required";
    }
    if (empty(htmlspecialchars($_POST["genre"]))) {
        $validationErrors[] = "Genre is required";
    }

    //insert db
    if (!$validationErrors) {
        try {
            if ($conn) {
                $query = "INSERT INTO `movies` (`title`, `description`, `year`, `director`, `imdb`, `genre_id`)
                        VALUES(:title, :description, :metai, :director, :imdb, :genre_id)";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':title', $_POST["title"], PDO::PARAM_STR);
                $stmt->bindParam(':description', $_POST["description"], PDO::PARAM_STR);
                $stmt->bindParam(':metai', $_POST["year"], PDO::PARAM_STR);
                $stmt->bindParam(':director', $_POST["director"], PDO::PARAM_STR);
                $stmt->bindParam(':imdb', $_POST["imdb"], PDO::PARAM_STR);
                $stmt->bindParam(':genre_id', $_POST["genre"], PDO::PARAM_STR);
                $stmt->execute();
                header('Location:/KITM_PHP_movieDb/?page=all');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>

<div class="row justify-content-center">
  <h2>Pridėti filmą</h2>
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
  <form method="post">
    <div class="form-group">
      <label for="title">Pavadinimas</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="Įveskite filmo pavadinimą">
    </div>
    <div class="form-group">
      <label for="description">Aprašymas</label>
      <textarea type="text" name="description" class="form-control" id="description"
                placeholder="Įveskite filmo aprašymą"></textarea>
    </div>
    <div class="form-group">
      <label for="year">Išleidimo metai</label>
      <select type="text" class="custom-select mr-sm-2" name="year" id="year">
        <option selected disabled>Pasirinkite...</option>
          <?php for ($i = 1900; $i < 2030; $i++): ?>
            <option value="<?= strval($i) ?>"><?= strval($i) ?></option>
          <?php endfor; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="director">Režisierius</label>
      <input type="text" name="director" class="form-control" id="director" placeholder="Įveskite režisierių">
    </div>
    <div class="form-group">
      <label for="imdb">Reitingas</label>
      <input type="text" name="imdb" class="form-control" id="imdb" placeholder="Įveskite reitingą">
    </div>
    <div class="form-group">
      <label for="genre">Žanras</label>
      <select class="custom-select mr-sm-2" name="genre" id="year">
        <option selected disabled>Pasirinkite žanrą</option>
          <?php foreach ($genres as $genre): ?>
            <option value="<?= $genre["id"] ?>"><?= $genre["genre_name"] ?></option>
          <?php endforeach; ?>
      </select>
    </div>
    <button type="submit" name="add" class="btn btn-primary">Įkelti</button>
  </form>
</div>