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
  <section class="container my-4">
    <h2 class="text-center my-4">Votre<?php echo ' '.$array_of_parameter[0]; ?></h2>
    <div class="row">
      <div id="cardShowAccount" class="card col-10 col-md-8 col-lg-6 mx-auto" style="width: 18rem;">
        <div class="card-header col-10 mx-auto">
          <?php echo $array_of_key[0].' : '.$array_of_parameter[0]; ?>
        </div>
        <ul class="list-group list-group-flush">
          <?php for ($i=1; $i < sizeof($array_of_parameter) ; $i++): ?>
            <?php echo '<li class="list-group-item col-10 mx-auto">'.$array_of_key[$i].' : '.$array_of_parameter[$i].'</li>'; ?>
          <?php endfor; ?>
        </ul>
        <div class="card-body mx-auto">
          <a href="index.php" id="buttonShowAccount" class="btn btn-primary">Retour accueil</a>
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
