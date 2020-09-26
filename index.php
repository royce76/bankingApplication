<?php
  include "template/nav.php";
  include "template/header.php";
  include "data/acounts.php";
?>

<?php
  if (sizeof(array_diff($connexion, $ID)) === 0):
?>
  <section class="container">
    <div class="row">
    <h2 class="mx-auto">Tous vos comptes</h2>
  <?php
    //we retrieve the data in $accounts
    $accounts = get_accounts();
    //create three bootstrap cards
    for ($i=0; $i < sizeof($accounts); $i++) :
  ?>
      <div class="card col-10 mx-auto my-4" style="width: 18rem;">
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
  <?php
    endfor;
  ?>
    </div>
  </section>
<?php
  else: echo '<p class="text-center">Regardez en haut de la page à droite pour vous connecter et afficher vos comptes</p>';
?>
<?php
  endif;
?>

<script src="js/main.js"></script>
<?php
  include "template/footer.php";
?>
