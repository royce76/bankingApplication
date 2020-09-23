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
    <a class="navbar-brand" href="index.html">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="statistical.html">Statistique<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.html">Blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="compteDropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Compte
          </a>
          <div class="dropdown-menu" aria-labelledby="compteDropDown">
            <a class="dropdown-item" href="currentAccount.html">Compte courant</a>
            <a class="dropdown-item" href="livretA.html">Livret A</a>
            <a class="dropdown-item" href="pel.html">PEL</a>
            <a class="dropdown-item" href="livretJeune.html">Livret Jeune</a>
            <a class="dropdown-item" href="perp.html">PERP</a>
            <a class="dropdown-item" href="lep.html">LEP</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="form.html">Créer un compte</a>
            <a class="dropdown-item" href="delete.html">Supprimer un compte</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="mouvementDropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Mouvement
          </a>
          <div class="dropdown-menu" aria-labelledby="mouvementDropDown">
            <a class="dropdown-item" href="deposit.html">Depôt</a>
            <a class="dropdown-item" href="withdraw.html">Retraît</a>
            <a class="dropdown-item" href="transfer.html">Virement</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Recherche..." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
      </form>
    </div>
  </nav>
  <header class="jumbotron">
    <h1 class="display-4">BANQUE NORMANDIE</h1>
    <p class="lead">Bienvenue sur BANQUE NORMANDIE, une banque à votre écoute.</p>
    <hr class="my-4">
    <p>Vous pouvez créer un compte bancaire à tout moment.</p>
    <a class="btn btn-primary btn-lg" href="form.html" role="button">Créer un compte</a>
  </header>
  <main>

  </main>
  <footer>
    <ul class="nav justify-content-center">
      <li class="nav-item ">
        <a class="nav-link active" href="index.html">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="doc/adresse.txt">Adresse</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="doc/mention_Légale.txt">Mention Légale</a>
      </li>
    </ul>
  </footer>

  <!--sccript bootstrap4-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <!--script boilerplate-->
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/livretA.js"></script>
</body>

</html>
