<?php

function connectDb() {
    global $host, $db, $username, $password, $options;
    $dsn = "mysql:host=$host;dbname=$db";
    try {
        $conn = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $conn;
}

function getAllMovies() {
    $conn = connectDb();
    $movies = [];

    try {
        if ($conn) {
            $stmt = $conn->query("SELECT movies.id, title, description, year, director, imdb, genre_name 
                                        FROM movies 
                                        JOIN genres ON movies.genre_id = genres.id");
            $movies = $stmt->fetchAll();
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return $movies;
}

function getMovieById($id){
    $conn = connectDb();
    $movie = null;

    try {
        if ($conn) {
            $stmt = $conn->prepare("SELECT `title`, `year` FROM `movies` WHERE `id` = :movieId");
            $stmt->bindValue(":movieId", $id, PDO::PARAM_INT);
            $stmt->execute();
            $movie = $stmt->fetch();
            $conn = null;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return $movie;
}

function getMovieByGenre($genreId) {
    $conn = connectDb();
    $movies = [];
    try {
        if ($conn) {
            $query = "SELECT movies.id, title, description, year, director, imdb, genre_name 
                                        FROM movies 
                                        JOIN genres ON movies.genre_id = genres.id WHERE genres.id = :genreId";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':genreId', $genreId, PDO::PARAM_INT);
            $stmt->execute();
            $movies = $stmt->fetchAll();
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return $movies;
}

function isValidGenre($genre){
    if (empty($genre)) {
        $validationErrors[] = "Reikia pasirinkti žanrą";
    }
}

function deleteMovie($id) {
    $conn = connectDb();
    try {
        if ($conn) {
            $stmt = $conn->prepare("DELETE FROM movies WHERE `id` = :movieId");
            $stmt->bindValue(":movieId", $id, PDO::PARAM_INT);
            $stmt->execute();
            $conn = null;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
}

function getAllGenres() {
    $conn = connectDb();
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
    $conn = null;

    return $genres;
}

function getGenre($id) {
    $conn = connectDb();
    $genre = null;

    try {
        if ($conn) {
            $stmt = $conn->prepare("SELECT genre_name FROM genres WHERE id = :genreId");
            $stmt->bindValue(":genreId", $id, PDO::PARAM_INT);
            $stmt->execute();
            $genre = $stmt->fetch();
            $conn = null;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return $genre;
}

function deleteGenre($id) {
    $conn = connectDb();
    try {
        if ($conn) {
            $stmt = $conn->prepare("DELETE FROM genres WHERE id = :genreId");
            $stmt->bindValue(":genreId", $id, PDO::PARAM_INT);
            $stmt->execute();
            $conn = null;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
}


function validateAddMovieFormData() {
    $validationErrors = [];

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

    return $validationErrors;

}

function validateAddGenreFormData() {
    $validationErrors = [];
    if (!preg_match("/\w{1,100}/", htmlspecialchars($_POST["genre_name"]))) {
        $validationErrors[] = "Įveskite kategorijos pavadinimą";
    }

    return $validationErrors;
}

function isValidId($id) {
    $isValid = false;
    if (preg_match("/\d/", $id)) {
        $isValid = true;
    }

    return $isValid;
}

function insertGenre($genreName) {
    $conn = connectDb();
    $validationErrors = [];
    try {
        if ($conn) {
            $query = "SELECT id FROM genres WHERE genre_name = :genreName";
            $stmt = $conn->prepare($query);
            $stmt->bindParam('genreName', $genreName, PDO::PARAM_STR);
            $stmt->execute();
            if (!$stmt->fetch()) {
                try {
                    if ($conn) {
                        $query = "INSERT INTO genres (genre_name) VALUES (:genreName)";
                        $stmt = $conn->prepare($query);
                        $stmt->bindParam('genreName', $genreName, PDO::PARAM_STR);
                        $stmt->execute();
                        header('Location:/KITM_PHP_movieDb/?page=categories_control');
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            } else {

                return false;
            };
        }
    } catch
    (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return $validationErrors;
}

function insertMovie() {
    $conn = connectDb();
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
    $conn = null;
}

