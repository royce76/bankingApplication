<?php
  include "data/acounts.php";
  $accounts = get_accounts();
  $array_of_key = [];
  for ($i=0; $i < sizeof($accounts) ; $i++) {
    foreach ($accounts[$i] as $key => $value) {
      if(isset($_GET[$key]) && !empty($_GET[$key])) {
        $parameter = htmlspecialchars($_GET[$key]);
        array_push($array_of_key,$parameter);
      }
    }
  }
  include "template/nav.php";
  include "template/header.php";
 ?>

<?php
for ($i=0; $i < sizeof($array_of_key) ; $i++) {
  echo "<p>$array_of_key[$i]</p>";
}
?>

<?php
  include "template/footer.php";
 ?>
