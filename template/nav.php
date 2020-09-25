<?php
  include "data/password.php";
  $connexion = get_password();
  $connexion_name = ["email","password"];
  $ID = [];
  foreach ($connexion_name as $names):
?>
  <?php
    if (isset($_POST[$names]) && !empty($_POST[$names])):
    $verify_name = htmlspecialchars($_POST[$names], ENT_QUOTES);
    array_push($ID, $verify_name);
  ?>
  <?php endif; ?>
<?php endforeach; ?>
<!doctype html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Banque Normandie</title>
    <meta name="description" content="Application bancaire avec ouverture de compte.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <!--link own css-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <!--link bootstrap4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <meta name="theme-color" content="#fafafa">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Accueil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="statistical.php">Statistique<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="compteDropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Compte
            </a>
            <div class="dropdown-menu" aria-labelledby="compteDropDown">
              <a class="dropdown-item" href="currentAccount.php">Compte courant</a>
              <a class="dropdown-item" href="livretA.php">Livret A</a>
              <a class="dropdown-item" href="pel.php">PEL</a>
              <a class="dropdown-item" href="livretJeune.php">Livret Jeune</a>
              <a class="dropdown-item" href="perp.php">PERP</a>
              <a class="dropdown-item" href="lep.php">LEP</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="form.php">Créer un compte</a>
              <a class="dropdown-item" href="delete.php">Supprimer un compte</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="mouvementDropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mouvement
            </a>
            <div class="dropdown-menu" aria-labelledby="mouvementDropDown">
              <a class="dropdown-item" href="deposit.php">Depôt</a>
              <a class="dropdown-item" href="withdraw.php">Retraît</a>
              <a class="dropdown-item" href="transfer.php">Virement</a>
            </div>
          </li>
        </ul>
        <form action="#" method="post" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="email" id="email" aria-describedby="emailHelp" name="email" placeholder="Votre E-mail...">
          <input class="form-control mr-sm-2" type="text" id="password" name="password" placeholder="Votre mot de passe...">
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Connexion</button>
        </form>
      </div>
    </nav>
