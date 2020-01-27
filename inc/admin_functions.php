<?php
session_start();
if (isset($_SESSION["user"]) && $_SESSION["user"] === "admin") {

    function updateMovie($updateMovieId)
    {
        $conn = connectDb();
        try {
            if ($conn) {
                $query = "UPDATE movies SET 
                                          `title` = :title, 
                                          `description` = :description, 
                                          `year` = :year, 
                                          `director` = :director, 
                                          `imdb` = :imdb, 
                                          `genre_id` = :genre_id WHERE movies.id = :movieId";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':title', $_POST["title"], PDO::PARAM_STR);
                $stmt->bindParam(':description', $_POST["description"], PDO::PARAM_STR);
                $stmt->bindParam(':year', $_POST["year"], PDO::PARAM_STR);
                $stmt->bindParam(':director', $_POST["director"], PDO::PARAM_STR);
                $stmt->bindParam(':imdb', $_POST["imdb"], PDO::PARAM_STR);
                $stmt->bindParam(':genre_id', $_POST["genre"], PDO::PARAM_STR);
                $stmt->bindParam(':movieId', $updateMovieId, PDO::PARAM_INT);

                $stmt->execute();
                header('Location:/KITM_PHP_movieDb/?page=movie_control');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $conn = null;
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
        header('Location:/KITM_PHP_movieDb/?page=categories_control');
    }

    function validateAddMovieFormData() {
        $validationErrors = [];

        if (!isValidText(htmlspecialchars($_POST["title"]))) {
            $validationErrors[] = "Title is required";
        }
        if (!isValidText(htmlspecialchars($_POST["description"]))) {
            $validationErrors[] = "Description is not valid";
        }
        if (!isValidText(htmlspecialchars($_POST["director"]))) {
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
        if (!isValidText(htmlspecialchars($_POST["genre_name"]))) {
            $validationErrors[] = "Įveskite kategorijos pavadinimą";
        }

        return $validationErrors;
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
}