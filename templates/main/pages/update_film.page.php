<?php
if(!isset($_COOKIE["PHPSESSID"]))
{
    session_start();
}
if (!isset($_SESSION["user"])) {
    header('Location:/KITM_PHP_movieDb/?page=login');
}
?>
<?php if($_SESSION["user"] === "admin"):?>

<?php
$movie = [];
$genres = [];
$validationErrors = [];
$updateMovieId = $_GET["edit"];

if (isset($updateMovieId)) {
    if (isValidId($updateMovieId)) {
        $movie = getMovieById($updateMovieId);
    }
}
$genres = getAllGenres();

if (isset($_POST["update"])) {
    $validationErrors = validateAddMovieFormData();
    if (!$validationErrors) {
        updateMovie($updateMovieId);
    }
}
?>

<div class="row justify-content-center">
    <h2>Redaguoti filmą</h2>
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
            <input type="text" name="title" class="form-control" id="title" value="<?=$movie["title"]?>">
        </div>
        <div class="form-group">
            <label for="description">Aprašymas</label>
            <textarea type="text" name="description" class="form-control" id="description"
                      ><?=ucfirst($movie["description"])?></textarea>
        </div>
        <div class="form-group">
            <label for="year">Išleidimo metai</label>
            <select type="text" class="custom-select mr-sm-2" name="year" id="year">
                <option selected ><?=$movie["year"]?></option>
                <?php for ($i = 1900; $i < 2030; $i++): ?>
                    <option value="<?= strval($i) ?>"><?= strval($i) ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="director">Režisierius</label>
            <input type="text" name="director" class="form-control" id="director" value="<?=$movie["director"]?>">
        </div>
        <div class="form-group">
            <label for="imdb">Reitingas</label>
            <input type="text" name="imdb" class="form-control" id="imdb" value="<?=$movie["imdb"]?>">
        </div>
        <div class="form-group">
            <label for="genre">Žanras</label>
            <select class="custom-select mr-sm-2" name="genre" id="year">
                <?php foreach ($genres as $genre): ?>
                    <?php if($movie["genre_name"] === $genre["genre_name"]):?>
                        <option value="<?= $genre["id"] ?>" selected><?= $genre["genre_name"] ?></option>
                        <?php endif;?>
                    <option value="<?= $genre["id"] ?>"><?= $genre["genre_name"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Išsaugoti</button>
    </form>
</div>
<?php endif;?>