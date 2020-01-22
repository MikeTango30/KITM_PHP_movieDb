<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?= SITE_TITLE ?></title>
  <!-- Bootstrap core CSS -->
  <link href="templates/<?=ACTIVE_TEMPLATE?>/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="templates/<?=ACTIVE_TEMPLATE?>/css/simple-sidebar.css" rel="stylesheet">
  <!-- My style-->
  <link href="templates/<?=ACTIVE_TEMPLATE?>/css/styles.css" rel="stylesheet">
</head>

<body>
  <div class="d-flex" id="wrapper">
    <?php include "_partials/header.view.php" ?>
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <?php include "_partials/sideNav.view.php" ?>
      <div class="container-fluid">
        <?php include "_partials/aboutBlock.view.php"?>
          <?php
          require $_SERVER["DOCUMENT_ROOT"].PATH_TO_ROUTER;
          ?>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
<!-- /#wrapper -->
<!-- Bootstrap core JavaScript -->
<script src="templates/<?=ACTIVE_TEMPLATE?>/js/jquery.min.js"></script>
<script src="templates/<?=ACTIVE_TEMPLATE?>/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
