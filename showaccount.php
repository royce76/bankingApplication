<?php
  include "data/acounts.php";
  $array_of_key = ["name", "number", "owner", "amount", "last_operation"];
  $array_of_parameter = [];
  for ($i=0; $i < sizeof($array_of_key) ; $i++) {
    if(isset($_GET[$array_of_key[$i]]) && !empty($_GET[$array_of_key[$i]])) {
      $parameter = htmlspecialchars($_GET[$array_of_key[$i]]);
      array_push($array_of_parameter,$parameter);
    }
  }
  include "template/nav.php";
  include "template/header.php";
 ?>

<?php
  for ($i=0; $i < sizeof($array_of_parameter) ; $i++) {
    echo "<p>$array_of_parameter[$i]</p>";
  }
?>

<?php
  include "template/footer.php";
 ?>
