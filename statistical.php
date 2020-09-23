
<?php
include "template/nav.php";
include "template/header.php";
?>


<!--loading figure-->
<div class="spinner-border" role="status">
  <span class="sr-only">Loading...</span>
</div>
<!--3 cards to show datas of bank informations-->
<div class="container">
  <div class="row">
    <article class="card col-10 offset-1 col-lg-3 offset-lg-0 m my-4" style="width: 18rem;">
      <h3 class="card-header text-center">
        Taux Emprunts
      </h3>
      <ul id="taux" class="list-group list-group-flush">
      </ul>
    </article>
    <article class="card col-10 offset-1 col-lg-4 offset-lg-1 my-4" style="width: 18rem;">
      <h3 class="card-header text-center">
        Cours de la Bourse
      </h3>
      <ul id="coursDeLaBourse" class="list-group list-group-flush">
      </ul>
    </article>
    <article class="card col-10 offset-1 col-lg-3 offset-lg-1 my-4" style="width: 18rem;">
      <h3 class="card-header text-center">
        Cours de la monnaie
      </h3>
      <ul id ="CoursDeLaMonnaie" class="list-group list-group-flush">
      </ul>
    </article>
  </div>
</div>

<?php
include "template/footer.php";
?>
