<?php
$validationErrors = [];
if (isset($_POST["add"])) {
    //Validation
    if (!preg_match("/\w{1,100}/", htmlspecialchars($_POST["genre_name"]))) {
        $validationErrors[] = "Įveskite kategorijos pavadinimą";
    }

    if (!$validationErrors) {
        try {
            if ($conn) {
                $query = "SELECT id FROM genres WHERE genre_name = :genreName";
                $stmt = $conn->prepare($query);
                $stmt->bindParam('genreName', $_POST["genre_name"], PDO::PARAM_STR);
                $stmt->execute();
                if (!$stmt->fetch()) {
                    try {
                        if ($conn) {
                            $query = "INSERT INTO genres (genre_name) VALUES (:genreName)";
                            $stmt = $conn->prepare($query);
                            $stmt->bindParam('genreName', $_POST["genre_name"], PDO::PARAM_STR);
                            $stmt->execute();
                            header('Location:/KITM_PHP_movieDb/?page=categories_control');
                        }
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                } else {
                    $validationErrors[] = "Toks Žanras jau egzistuoja";
                };
            }
         }
catch
    (PDOException $e) {
        echo $e->getMessage();
    }

        }
}
?>

<div class="row">
  <h1>Pridėti naują kategoriją</h1>
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
      <input type="text" name="genre_name" class="form-control" id="title"
             placeholder="Įveskite kategorijos pavadinimą">
    </div>
    <button type="submit" name="add" class="btn btn-primary">Įkelti</button>
  </form>
</div>
