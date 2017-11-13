<?php
  include("template/header.php")
 ?>

<p>This is the index view</p>
<p>Bonjour</p>

<!-- On boucle sur la liste des utilisateurs et on affiche leurs noms -->
<?php
foreach ($bankAccounts as $bankAccount) {
  echo "<p>" . $bankAccount->getNameAccount() .', '. $bankAccount->getAmountOfMoney() ." $ . </p>";
}
 ?>

 <form action="" method="post">
   <input type="text" name="name" value="">
   <input type="text" name="age" value="">
   <input type="submit" name="addUser" value="Envoyer">
 </form>

<a href="presentation.php">découvrir notre entreprise</a>

 <?php
   include("template/footer.php")
  ?>
