<?php
if(isset($_POST["add"])) {
    try {
        if($conn) {
            $query = "INSERT INTO `movies` (`title`, `description`, `year`, `director`, `imdb`, `genre_id`)
                      VALUES(:title, :description, :year, :director, :imdb, :genre_id)";
            $stmt = $conn -> prepare($query);
            $stmt -> bindParam(':title', $_POST["title"], PDO::PARAM_STR);
            $stmt -> bindParam(':description', $_POST["description"], PDO::PARAM_STR);
            $stmt -> bindParam(':year', $_POST["year"], PDO::PARAM_STR);
            $stmt -> bindParam(':director', $_POST["director"], PDO::PARAM_STR);
            $stmt -> bindParam(':imdb', $_POST["imdb"], PDO::PARAM_STR);
            $stmt -> bindParam(':genre_id', $_POST["genre"], PDO::PARAM_STR);
            $stmt ->execute();
            var_dump(header('Location:?page=all'));
        }
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }
}
?>

<form method="post">
    <div class="form-group">
        <label for="title">Pavadinimas</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Įveskite filmo pavadinimą">
    </div>
    <div class="form-group">
        <label for="description">Aprašymas</label>
        <textarea type="text" name="description" class="form-control" id="description" placeholder="Įveskite filmo aprašymą"></textarea>
    </div>
    <div class="form-group">
        <label for="year">Išleidimo metai</label>
        <select class="custom-select mr-sm-2" name="year" id="year">
            <option selected disabled>Pasirinkite...</option>
            <?php for($i = 1900; $i < 2030; $i++ ):?>
            <option value="<?=$i - 1899?>"><?=$i?></option>
            <?php endfor;?>
        </select>
    </div>
    <div class="form-group">
        <label for="director">Režisierius</label>
        <input type="text" name="director" class="form-control" id="director" placeholder="Įveskite režisierių">
    </div>
    <div class="form-group">
        <label for="imdb">Reitingas</label>
        <input type="text" name="imdb" class="form-control" id="imdb" placeholder="Įveskite reitingą">
    </div>
    <div class="form-group">
        <label for="genre">Žanras</label>
        <select class="custom-select mr-sm-2" name="genre" id="year">
            <option selected disabled>Pasirinkite žanrą</option>
            <option value="1">Trileris</option>
            <option value="2">Komedija</option>
        </select>
    </div>
    <button type="submit" name="add" class="btn btn-primary">Įkelti</button>
</form>
