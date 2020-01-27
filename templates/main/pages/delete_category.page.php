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
$genre = [];
$deleteGenreId = isset($_GET["delete"]) ? htmlspecialchars($_GET["delete"]) : htmlspecialchars($_GET["deleteRly"]);

if (isset($deleteGenreId)) {
    if (isValidId($deleteGenreId)) {
        $genre = getGenre($deleteGenreId);
    }

    if (isset($_GET["deleteRly"])) {
        if (isValidId($deleteGenreId)) {
            deleteGenre($deleteGenreId);
        }
    }
}
?>
<div class="container-fluid">
    <div class="container delete">
        <div class="row h-100">
            <div class="col-6 h-100 really-delete">
                <?php if ($genre): ?>
                    <div class="row h-100 my-auto align-content-center text-center justify-content-center">
                        <h1>
                            Ar tikrai norite ištrinti <strong><?= ucfirst($genre["genre_name"]) ?></strong>
                        </h1>
                        <br>
                        <h1>
                            <a href="?page=delete_category&deleteRly=<?= $deleteGenreId ?>" class="btn btn-danger">Ištrinti</a>
                        </h1>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-6 h-100 cancel">
                <div class="row h-100 my-auto align-content-center text-center justify-content-center">
                    <h1>
                        <a href="?page=movie_control" class="btn btn-primary">Atšaukti</a>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>