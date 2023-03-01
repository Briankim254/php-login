<?php  
include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Signin </title>
    <link href='node_modules/bootstrap/dist/css/bootstrap.css' rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form method="post" action="login.php" name="form">
    <h1 class="h3 mb-3 fw-normal">Login in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
      <label for="floatingInput">Registration Number</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login in</button>
  </form>
</main>
  </body>
</html>
