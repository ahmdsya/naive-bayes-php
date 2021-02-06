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

    <title>Naive Bayes - Masuk</title>

    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />

    <link rel="stylesheet" href="dist/css/fontawesome.css" />
    <link rel="stylesheet" href="dist/css/brands.css" />
    <link rel="stylesheet" href="dist/css/solid.css" />
    <link rel="stylesheet" href="dist/login.css" />

  </head>

  <body>
    <form class="form-signin" method="post" action="login-proses.php">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Naive Bayes : UKT</h1>
        <p>Masuk Ke Sistem</p>
      </div>

      <div class="form-label-group">
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="username">Username</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Masuk</button>
      
      <p class="mt-2 text-center"><a href="register.php">Daftar Akun</a></p>
    
    </form>
  </body>
</html>
