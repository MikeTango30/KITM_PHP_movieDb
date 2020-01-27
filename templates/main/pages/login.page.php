<?php
if (isset($_POST["login"])) {
    $userName = htmlspecialchars($_POST["username"]);
    $passWord = htmlspecialchars($_POST["password"]);

    if (isValidLogin($userName, $passWord)) {
        $_SESSION["user"] = "admin";
        $_SESSION["counter"] = 0;
        header('Location:/KITM_PHP_movieDb/?page=movie_control');
    } else {
        $_SESSION["counter"] += 1;
        if ($_SESSION["counter"] === 5) {
//      todo
        }
    }
}
?>

<div class="container">
  <div class="row justify-content-center mb-2">
  <h2>Prisijungimas</h2>
  </div>
  <div class="row justify-content-center">
    <div class="col-4">
      <form method="post">
        <div class="form-group">
          <input type="text" class="form-control" id="login" name="username" placeholder="Prisijungimo vardas">

        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="password" name="password" placeholder="Slaptažodis">
        </div>
        <input type="submit" class="btn btn-primary" name="login" value="Prisijungti">
      </form>
    </div>
  </div>
</div>

