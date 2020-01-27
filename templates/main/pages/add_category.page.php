<?php
$validationErrors = [];
if (isset($_POST["add"])) {
    //Validation
    $validationErrors = validateAddGenreFormData();

    if (!$validationErrors) {
        if (!insertGenre($_POST["genre_name"])){
            $validationErrors[] = "Toks Žanras jau egzistuoja";
        }
    }
}
?>

<div class="container">
  <div class="row justify-content-center">
    <h1>Pridėti naują kategoriją</h1>
  </div>
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
