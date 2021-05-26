<?php
  require 'header.php';
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <h1>Signup</h1>
          <?php
            if (isset($_GET['error'])) {
              if ($_GET['error'] == "emptyfields") {
                echo '<p class="signuperror">Fyld ind alle felter!</p>';
              }
              else if ($_GET['error'] == "invaliduidmail") {
                echo '<p class="signuperror">Invalid Brugernavn og E-mail!</p>';
              }
              else if ($_GET['error'] == "invaliduid") {
                echo '<p class="signuperror">Invalid Brugernavn!</p>';
              }
              else if ($_GET['error'] == "invalidmail") {
                echo '<p class="signuperror">Invalid E-mail!</p>';
              }
              else if ($_GET['error'] == "passwordcheck") {
                echo '<p class="signuperror">Din adgangskode stemmer ikke!</p>';
              }
              else if ($_GET['error'] == "usertaken") {
                echo '<p class="signuperror">Brugernavnet er allerede i brug!</p>';
              }
            }
            else if($_GET['signup'] == "success") {
              echo '<p class="signupsuccess">Bruger oprettet!</p>';
            }
          ?>
          <form class="form-signup" action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            <button type="submit" name="Signup-submit">Signup</button>
          </form>
        </section>
      </div>
    </main>

<?php
  require "footer.php";
?>
