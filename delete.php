
<?php
include "template/nav.php";
include "template/header.php";
?>
<div class="container">
  <div class="row">
    <form action="#" method="post" class="col-11">
      <div class="form-group">
        <label for="compte">Votre compte</label>
        <select class="form-control" id="compte" name="compte">
          <option value="">--Choisissez votre de compte--</option>
          <option value="courant">Compte courant</option>
          <option value="livretA">LivretA</option>
          <option value="PEL">PEL</option>
          <option value="livretJeune">Livret Jeune</option>
          <option value="Perp">PERP (retraite)</option>
          <option value="Perp">LEP (populaire)</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary mb-2">Supprimer</button>
    </form>
  </div>
</div>
<?php
include "template/footer.php";
?>
