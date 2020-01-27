<?php
if(!isset($_COOKIE["PHPSESSID"]))
{
    session_start();
}
$_SESSION["counter"] = 0;

if (isset($_SESSION["user"]) && $_SESSION["user"] === "admin") {
    header('Location:/KITM_PHP_movieDb/?page=movie_control');
}

$validationErrors = [];

if (isset($_POST["login"])) {
    $validationErrors = validateLogin();
    if (!$validationErrors && verifyPassword()) {
        loginUser();
    } else {
        $_SESSION["counter"] += 1;
        var_dump($_SESSION["counter"]);
        if ($_SESSION["counter"] >= 5) {
          sleep(10);
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

