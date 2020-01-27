<?php


?>

<div class="row justify-content-center">
  <h2>Visi filmai</h2>
</div>
<div class="container">
  <table class="table table-bordered">
    <tr>
      <th>Filmo ID</th>
      <th>Pavadinimas</th>
      <th>Aprašymas</th>
      <th>Išleidimo metai</th>
      <th>Režisierius</th>
      <th>IMDB reitingas</th>
      <th>Žanras</th>
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
    </tr>
  </table>
</div>