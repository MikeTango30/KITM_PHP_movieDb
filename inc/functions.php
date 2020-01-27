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
            $stmt = $conn->prepare("SELECT movies.id, title, description, year, director, imdb, genre_name 
                                        FROM movies 
                                        JOIN genres ON movies.genre_id = genres.id WHERE movies.id = :movieId");
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

function getAllMovieTitles() {
    $conn = connectDb();
    $movies = [];
    try {
        if ($conn) {
            $stmt = $conn->query("SELECT title FROM movies");
            $movies = $stmt->fetchAll();
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return $movies;
}

function validateGenre($genre){
    $validationErrors = [];
    if (empty($genre)) {
        $validationErrors[] = "Reikia pasirinkti žanrą";
    }

    return $validationErrors;
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

function isValidText($text) {
    $isValid = false;
    if (preg_match("/\w{1,100}/", htmlspecialchars($text))) {
        $isValid = true;
    }

    return $isValid;
}

function isValidId($id) {
    $isValid = false;
    if (preg_match("/\d/", $id)) {
        $isValid = true;
    }

    return $isValid;
}

function searchMovies($searchQuery) {
    $conn = connectDb();
    $movies = [];
    try {
        if ($conn) {
            $query = "SELECT movies.id, title, description, year, director, imdb, genre_name 
                                        FROM movies 
                                        JOIN genres ON movies.genre_id = genres.id WHERE title LIKE ?";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(1, "%$searchQuery%", PDO::PARAM_STR);
            $stmt->execute();
            $movies = $stmt->fetchAll();
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return $movies;
}

function validateLogin() {
    $validationErrors = [];
    if (!isValidText($_POST["username"]) || !isValidText($_POST["password"])) {
        $validationErrors[] = "Prisijungimo vardas ir/arba slaptažodis yra netinkamas(-i)";
    }

    return $validationErrors;
}

function validateSearch() {
    $validationErrors = [];
    if (!isValidText($_GET["search"])) {
        $validationErrors[] = "Įveskite paieškos raktažodį";
    }

    return $validationErrors;
}

function verifyPassword() {
    $conn = connectDb();
    $passwordHash = "";

    try {
        if ($conn) {
            $query = "SELECT password FROM users WHERE `name` = :username";
            $stmt = $conn->prepare($query);
            $stmt->bindParam("username", $_POST["username"], PDO::PARAM_STR);
            $stmt->execute();
            $passwordHash = $stmt->fetch();
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return password_verify($_POST["password"], $passwordHash["password"]);
}

function loginUser() {
    $_SESSION["user"] = "admin";
    $_SESSION["counter"] = 0;
    header('Location:/KITM_PHP_movieDb/?page=movie_control');
}