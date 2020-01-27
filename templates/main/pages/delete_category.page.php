<?php
$genre = [];

$deleteGenreId = isset($_GET["delete"]) ? htmlspecialchars($_GET["delete"]) : htmlspecialchars($_GET["deleteRly"]);

if (isset($deleteGenreId)) {
    if (preg_match("/\d/", $deleteGenreId)) {
        $stmt = $conn->prepare("SELECT genre_name FROM genres WHERE id = :genreId");
        $stmt->bindValue(":genreId", $deleteGenreId, PDO::PARAM_INT);
        $stmt->execute();
        $genre = $stmt->fetch();
    }

}

if (isset($_GET["deleteRly"])) {
    if (preg_match("/\d/", $deleteGenreId)) {
        $stmt = $conn->prepare("DELETE FROM genres WHERE id = :genreId");
        $stmt->bindValue(":genreId", $deleteGenreId, PDO::PARAM_INT);
        $stmt->execute();
        header('Location:/KITM_PHP_movieDb/?page=categories_control');
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
                        <a href="?page=categories_control" class="btn btn-primary">Atšaukti</a>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>