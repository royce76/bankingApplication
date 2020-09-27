<?php
  //this array get name of form
  $name_of_form = ["compte", "lastName", "firstName", "email", "phone", "deposit"];
  //this one is created to link the user choice in the form
  $array_label = ["Choix du compte", "Votre nom", "Votre prénom", "Votre E-mail", "Votre n° de tél", "Votre premier dépôt"];
  //we stock choice user values from form in this array
  $array_of_choice_user = [];
  function test_input($data) {
    $data = trim($data); // remove space of both side
    $data = stripslashes($data);// remove backslashes
    $data = htmlspecialchars($data, ENT_QUOTES);//both quotes
    return $data;
  }
?>
<?php
$error = "";
//we look if post method is okay
  if ($_SERVER["REQUEST_METHOD"] == "POST"):
?>
  <?php
    foreach ($name_of_form as $name) :
  ?>
    <?php
      if (!empty($_POST[$name]) && isset($_POST[$name])):
      $names = test_input($_POST[$name]);
      array_push($array_of_choice_user, $names);
    ?>
    <?php
      else:
      $error = "champs requis";
    ?>
    <?php endif; ?>
  <?php endforeach; ?>
<?php endif; ?>

<?php
  include "template/nav.php";
  include "template/header.php";
?>

<?php //if ($info_user["Votre premier dépôt"] < 50): ?>
  <?php //echo "oups" ?>
<?php //else: ?>
  <?php //echo "okay" ?>
<?php// endif; ?>

<!-- test if the $_POST[$name] for account is correct -->
<?php
  // $compte = "";
  // $accounts_name = ["Compte courant", "Livret A", "PEL", "Livret Jeune", "Perp", "Lep"];
  // if (sizeof(array_intersect($accounts_name, $array_of_choice_user)) == 1):
?>
  <?php //$compte ?>
<?php //else: ?>
  <?php //$compte = "champs requis" ?>
<?php //endif; ?>

 <div class="container">
   <div class="row">
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES);?>" method="post" class="col-10 offset-1">
       <div class="form-group">
         <label for="compte">Type de compte</label>
         <select class="form-control" id="compte" name="compte">
           <option value="">--Choisissez un type de compte--</option>
           <option value="Compte courant">Compte courant</option>
           <option value="LivretA">Livret A</option>
           <option value="PEL">PEL</option>
           <option value="Livret Jeune">Livret Jeune</option>
           <option value="Perp">PERP (retraite)</option>
           <option value="Lep">LEP (populaire)</option>
         </select>
         <span><?php echo $error; ?></span>
       </div>
       <div class="form-group">
         <label for="lastName">Entrez votre nom</label>
         <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Votre nom...">
         <span><?php echo $error; ?></span>
       </div>
       <div class="form-group">
         <label for="firstName">Entrez votre prénom</label>
         <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Votre prénom...">
         <span><?php echo $error; ?></span>
       </div>
       <div class="form-group">
         <label for="email">Adresse E-mail</label>
         <input type="email" class="form-control" id="email" name="email" placeholder="exemple@exemple.com">
         <span><?php echo $error; ?></span>
       </div>
       <div class="form-group">
         <label for="phone">Votre numéro de téléphonne</label>
         <input type="tel" class="form-control" id="phone" name="phone" placeholder="0X XX XX XX XX">
         <span><?php echo $error; ?></span>
       </div>
       <div class="form-group">
         <label for="deposit">Depôt d'argent (Minimum 50 euro)</label>
         <input type="number" class="form-control" id="deposit" name="deposit" value="50" min="50">
         <span><?php echo $error; ?></span>
       </div>
       <button id="buttonNewAccount" type="submit" class="btn btn-primary mb-2">Valider</button>
     </form>
   </div>
 </div>

 <!-- $info_user is an array from $array_label and $array_of_choice_user -->
<?php
  if (sizeof($array_of_choice_user) === sizeof($array_label)):
  $info_user = array_combine($array_label,$array_of_choice_user);
?>

<section class="container">
  <h2 class="text-center">Vos informations</h2>
  <div class="row">
    <div class="card col-10 col-md-7 col-lg-5 mx-auto" style="width: 18rem;">
      <?php foreach ($info_user as $key => $value): ?>
        <?php if ($value === $array_of_choice_user[0]): ?>
          <?php echo '<div class="card-header col-10 mx-auto">'.$key.' : '.$value.'</div>' ?>
        <?php endif; ?>
      <?php endforeach; ?>
      <ul class="list-group list-group-flush">
        <?php foreach ($info_user as $keys => $values): ?>
          <?php if ($values !== $array_of_choice_user[0]): ?>
            <?php echo '<li class="list-group-item col-10 mx-auto">'.$keys.' : '.$values.'</li>'; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php endif; ?>

<?php
  include "template/footer.php";
?>
