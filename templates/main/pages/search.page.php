<?php
$validationErrors = [];
$movies = [];
$allMovies = [];
$allMovies = getAllMovieTitles();

if (isset($_GET["searchBtn"])) {
    $validationErrors = validateSearch();
    if (!$validationErrors) {
        $movies = searchMovies($_GET["search"]);
    }
}
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <h2>Rask filmą</h2>
    </div>
    <div class="row justify-content-center">
        <form class="form-inline">
            <div class="form-group">
                <input type="hidden" name="page" value="search">
                <input class="form-control mr-sm-2" list="movieTitles" id="movies" name="search" type="search"
                       placeholder="Ieškoti"
                       aria-label="Search"/>

                <datalist id="movieTitles">
                    <?php foreach ($allMovies as $movie): ?>
                        <option value="<?= $movie["title"] ?>">
                    <?php endforeach; ?>
                </datalist>
                <button class="btn btn-outline-success my-2 my-sm-0" name="searchBtn" type="submit">Ieškoti</button>
            </div>
        </form>
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
            <?php elseif (isset($_GET["searchBtn"]) && !$movies && !$validationErrors): ?>
                <div class="alert alert-danger" role="alert">
                    <h3>Tokių filmų pas mus nėra!</h3>
                </div>
            <?php endif; ?>
            </tr>
        </table>
    </div>
</div>