<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Apotik Online</title>
</head>
<body class="bglangit">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="index.php">
        <img src="assets/img/house-heart.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Apotik Online    
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
      </div>
        </div>
         </div>
    </nav>
    <form class="container" action="do_login.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <?php
    if (!empty($_SESSION["error"])) {
  ?>
    <div class="alert alert-danger" role="alert">
      <?= $_SESSION["error"] ?>
    </div>
  <?php
    unset($_SESSION["error"]);
    }
  ?>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <br>
  <br>
  <p>dont have an account? <a href="register.php">register here</a></p>
</form>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>