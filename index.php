<?php
  include "template/nav.php";
  include "template/header.php";
  include "data/acounts.php";
?>
<section class="container">
  <div class="row">
  <h2 class="mx-auto">Tout vos comptes</h2>
<?php
  //we retrieve the data in $accounts
  $accounts = get_accounts();
  //create three bootstrap cards
  for ($i=0; $i < sizeof($accounts); $i++) :
?>

  <div class="card col-10 offset-1 my-4" style="width: 18rem;">
    <!-- for each key called name we put them in the head of the card -->
    <div class="card-header text-center">
      <?php foreach ($accounts[$i] as $key => $value): ?>
        <?php if ($key === "name") : ?>
          <?php echo $value ?>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <ul class="list-group list-group-flush">
      <!--attention for the li it is necessary to pass them in echo so that it is added to the card-->
      <?php foreach ($accounts[$i] as $keys => $values): ?>
        <?php if ($keys !== "name") : ?>
          <?php echo '<li class="list-group-item text-center">'.$keys.' : '.$values.'</li>' ?>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <div class="card-body mx-auto">
      <a href="showaccount.php?<?php foreach ($accounts[$i] as $keyss => $parameter): ?><?php echo "$keyss=$parameter&amp;"; ?><?php endforeach; ?>
      " class="btn btn-primary">Voir mon compte
      </a>
    </div>
  </div>

<?php endfor; ?>
  </div>
</section>
<!-- <div class="spinner-border" role="status">
<span class="sr-only">Loading...</span>
</div>
<div id="divLayer">
<div id="layer" class="card bg-dark text-white">
<img id="imgLayer" src="" class="card-img">
<article class="card-img-overlay">
<h5 class="card-title">Sécurité</h5>
<p id="messageSecurity" class="card-text"></p>
<button id="buttonLayer" type="button" class="btn btn-info">Accepter</button>
</article>
</div>
</div> -->
<script src="js/main.js"></script>
<?php
  include "template/footer.php";
?>
