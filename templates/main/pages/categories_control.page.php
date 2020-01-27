<?php

if (isset($_GET["delete"])) {
    if (preg_match("/\d/", htmlspecialchars($_GET["id"]))) {
        $editMovieId = htmlspecialchars($_GET["edit"]);
    }
}
$genres = [];

try {
    if ($conn) {
        $query = "SELECT * FROM genres";
        $stmt = $conn->query($query);
        $genres = $stmt->fetchAll();
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>
<div class="row justify-content-center">
    <h2>Kategorijų valdymas</h2>
</div>
<div class="row justify-content-center">
    <h3><a href="?page=add_category" class="btn btn-outline-primary mb-3">Pridėti kategoriją</a></h3>
</div>
<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>Kategorijos ID</th>
            <th>Pavadinimas</th>
            <th>Veiksmai</th>
            <?php foreach ($genres as $genre): ?>
        <tr>
            <td><?= $genre["id"] ?></td>
            <td><?= ucfirst($genre["genre_name"]) ?></td>
            <td>
                <a href="?page=delete_category&delete=<?=$genre["id"]?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tr>
    </table>
</div>