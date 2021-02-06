<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Naive Bayes - Daftar</title>

    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />

    <link rel="stylesheet" href="dist/css/fontawesome.css" />
    <link rel="stylesheet" href="dist/css/brands.css" />
    <link rel="stylesheet" href="dist/css/solid.css" />
    <link rel="stylesheet" href="dist/login.css" />

  </head>

  <body>
    <form class="form-signin" method="post" action="register-proses.php">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Naive Bayes : UKT</h1>
        <p>Daftar Akun</p>
      </div>

      <div class="form-label-group">
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="username">Username</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="confirm" name="confirm" class="form-control" placeholder="Ulangi Password" required>
        <label for="confirm">Ulangi Password</label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Daftar</button>
      
      <p class="mt-2 text-center"><a href="login.php">Masuk Akun</a></p>
    
    </form>
  </body>
</html>
