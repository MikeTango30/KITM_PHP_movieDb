<?php

function getAllMovies() {
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

    return $movies;
}