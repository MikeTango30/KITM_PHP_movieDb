<h2>VISI FILMAI</h2>
<?php
$dsn = "mysql:host=$host;dbname=$db";

try {
    $conn = new PDO($dsn, $username, $password);
    if ($conn) {

        $stmt = $conn->query("SELECT * FROM movies JOIN genres ON movies.genre_id = genres.id");
        $movies = $stmt->fetchAll();
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<table class="table table-bordered">
  <tr>
    <?php foreach ($movies as $movie): ?>
      <tr>
        <td><?= $movie["id"] ?></td>
        <td><?= ucfirst($movie["title"]) ?></td>
        <td><?= ucfirst($movie["description"]) ?></td>
        <td><?= ucfirst($movie["director"]) ?></td>
        <td><?= $movie["imdb"] ?></td>
        <td><?= ucfirst($movie["genre_name"]) ?></td>
      </tr>
    <?php endforeach; ?>
  </tr>
</table>