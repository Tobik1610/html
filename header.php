<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Example of description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>

    <header class="header">
      <nav class="nav">
        <a href="index.php">
          <img class="header-logo" src="img/logo.png" alt="logo">
        </a>
        <ul class="nav-list">
          <li><a class="nav-item" href="index.php">Home</a></li>
          <li><a class="nav-item" href="#">Portfolio</a></li>
          <li><a class="nav-item" href="#">About me</a></li>
          <li><a class="nav-item" href="#">Contact</a></li>
        </ul>
        <div class="login">
          <form action="includes/login.inc.php" method="post">
            <input class="input-login" type="text" name="mailuid" placeholder="Username/Email">
            <input class="input-login" type="password" name="pwd" placeholder="Password">
            <button class="btn-login" type="submit" name="login-submit">Login</button>
          </form>
          <a class="signup" href="signup.php">Signup</a>
          <form action="includes/logout.inc.php" method="post">
            <button class="btn-login" type="submit" name="logout-submit">Logout</button>
          </form>
        </div>
      </nav>
    </header>
