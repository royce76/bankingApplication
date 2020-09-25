<?php
  include "template/nav.php";
  include "template/header.php";
?>

<section class="container">
  <h3 class="text-center">Connexion</h3>
  <div class="row">
    <form class="col-10 offset-1">
      <div class="form-group">
        <label for="email">Adresse E-mail</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        <small id="emailHelp" class="form-text text-muted">Votre E-mail restera secret</small>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Valider</button>
    </form>
  </div>
</section>

<?php
  include "template/footer.php";
?>
