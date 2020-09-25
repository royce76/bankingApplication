<?php
  $array_of_key = ["name", "number", "owner", "amount", "last_operation"];
  $array_of_parameter = [];
  for ($i=0; $i < sizeof($array_of_key) ; $i++) {
    if(isset($_GET[$array_of_key[$i]]) && !empty($_GET[$array_of_key[$i]])) {
      $parameter = htmlspecialchars($_GET[$array_of_key[$i]], ENT_QUOTES);
      array_push($array_of_parameter,$parameter);
    }
  }
  include "template/nav.php";
  include "template/header.php";
 ?>

<?php if (sizeof($array_of_key) === sizeof($array_of_parameter)): ?>
  <section class="container">
    <div class="row">
      <h2 class="mx-auto">Votre<?php echo ' '.$array_of_parameter[0]; ?></h2>
      <div class="card col-10 offset-1" style="width: 18rem;">
        <div class="card-header text-center">
          <?php echo $array_of_key[0].' : '.$array_of_parameter[0]; ?>
        </div>
        <ul class="list-group list-group-flush">
          <?php for ($i=1; $i < sizeof($array_of_parameter) ; $i++): ?>
            <?php echo '<li class="list-group-item text-center">'.$array_of_key[$i].' : '.$array_of_parameter[$i].'</li>'; ?>
          <?php endfor; ?>
        </ul>
        <div class="card-body mx-auto">
          <a href="index.php" class="btn btn-primary">Retour accueil</a>
        </div>
      </div>
    </div>
  </section>
  <?php else: ?>
    <?php echo '<h2 class="text-center">Pourquoi avez-vous touché au nom du paramètre de l\'URL ?</h2>'; ?>
<?php endif; ?>

<?php
  include "template/footer.php";
 ?>
