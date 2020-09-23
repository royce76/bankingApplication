<?php
  include "template/nav.php";
  include "template/header.php";
 ?>

 <div class="card" style="width: 18rem;">
   <ul id="userAccount" class="list-group list-group-flush">
     <li id="accountInput" class="list-group-item"></li>
     <li id="lastNameInput" class="list-group-item"></li>
     <li id="emailInput" class="list-group-item"></li>
     <li id="phoneInput" class="list-group-item"></li>
     <li id="depositInput" class="list-group-item"></li>
   </ul>
 </div>
 <div class="container">
   <div class="row">
     <form action="#" method="post" class="col-11">
       <div class="form-group">
         <label for="compte">Type de compte</label>
         <select class="form-control" id="compte" name="compte">
           <option value="">--Choisissez un type de compte--</option>
           <option value="courant">Compte courant</option>
           <option value="livretA">LivretA</option>
           <option value="PEL">PEL</option>
           <option value="livretJeune">Livret Jeune</option>
           <option value="Perp">PERP (retraite)</option>
           <option value="Perp">LEP (populaire)</option>
         </select>
       </div>
       <div class="form-group">
         <label for="lastName">Entrez votre nom</label>
         <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Votre nom..." required>
       </div>
       <div class="form-group">
         <label for="firstName">Entrez votre prénom</label>
         <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Votre prénom..." required>
       </div>
       <div class="form-group">
         <label for="email">Adresse E-mail</label>
         <input type="email" class="form-control" id="email" name="email" placeholder="exemple@exemple.com" required>
       </div>
       <div class="form-group">
         <label for="phone">Votre numéro de téléphonne</label>
         <input type="tel" class="form-control" id="phone" name="phone" placeholder="0X XX XX XX XX" required>
       </div>
       <div class="form-group">
         <label for="deposit">Depôt d'argent (Minimum 50 euro)</label>
         <input type="number" class="form-control" id="deposit" name="deposit" value="50" min="50" required>
       </div>
     </form>
   </div>
   <button id="buttonNewAccount" type="submit" class="btn btn-primary mb-2">Valider</button>
 </div>
 <?php
 include "template/footer.php";
 ?>
