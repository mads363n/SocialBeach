<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header>
      <nav class="nav-header-main"
        <a class="header-logo" href="index.php"
          <img src="img/logo.png" alt="mmtuts logo"
        </a>
        <ul>
          <li><a href="index.php">Hjem</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Om os</a></li>
          <li><a href="#">Kontakt</a></li>
        </ul>
      </nav>
      <div class="header-login">
          <form action="includes/login.inc.php" method="post">
              <input type="text" name="mailuid" placeholder="Usernamse/E-Mail...">
              <input type="password" name="pwd" placeholder="Password...">
              <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>
            <form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit">Logout</button>
          </div>
        </nav>
    </header>
