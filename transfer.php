
<?php
include "template/nav.php";
include "template/header.php";
?>


<div class="container">
  <div class="row">
    <form action="#" method="post" class="col-11">
      <div class="form-group">
        <label for="compteExpediteur">Votre compte expediteur</label>
        <select class="form-control" id="compteExpediteur" name="compteExpediteur">
          <option value="">--Choisissez votre de compte--</option>
          <option value="courant">Compte courant</option>
          <option value="livretA">LivretA</option>
          <option value="PEL">PEL</option>
          <option value="livretJeune">Livret Jeune</option>
          <option value="Perp">PERP (retraite)</option>
          <option value="Perp">LEP (populaire)</option>
        </select>
      </div>
      <div class="form-group">
        <label for="compteDestinataire">Votre compte destinataire</label>
        <select class="form-control" id="compteDestinataire" name="compteDestinataire">
          <option value="">--Choisissez votre de compte--</option>
          <option value="courant">Compte courant</option>
          <option value="livretA">LivretA</option>
          <option value="PEL">PEL</option>
          <option value="livretJeune">Livret Jeune</option>
          <option value="Perp">PERP (retraite)</option>
          <option value="Perp">LEP (populaire)</option>
        </select>
      </div>
      <div class="form-group">
        <label for="transfert">Virement (Minimum 20 euro)</label>
        <input type="number" class="form-control" id="transfert" name="transfert" value="20" min="20" required>
      </div>
      <button type="submit" class="btn btn-primary mb-2">Valider</button>
    </form>
  </div>
</div>
<?php
include "template/footer.php";
?>
