<?php
  include("template/header.php")
 ?>

<!-- ADD ACCOUNT FORM DROPDOWN -->
 <div class="container_form">

 <button type="button" class="btn btn-primary button_show_projets"
         onclick="displayYesNo()">Ajouter un projet</button>

    <div id="YesNo" class="container">
      <p>AAAAAA</p>
    </div>

  </div>

<h3>Bank Accounts</h3>

<!-- TABLE WITH BANK ACCOUNTS -->
<table class="table table-striped">

  <thead>
    <tr>
      <th>Account Name</th>
      <th>Amount of Money</th>
      <th>Actions</th>
    </tr>
  </thead>

  <tbody>

    <?php
    foreach ($bankAccounts as $bankAccount) {
      ?>

    <tr>
      <td><?php echo $bankAccount->getNameAccount() ?></td>
      <td><?php echo $bankAccount->getAmountOfMoney() ?></td>
    </tr>

    <?php
    }
    ?>

  </tbody>
</table>


 <form action="" method="post">
   <input type="text" name="name" value="">
   <input type="text" name="age" value="">
   <input type="submit" name="addUser" value="Envoyer">
 </form>

<a href="presentation.php">découvrir notre entreprise</a>

 <?php
   include("template/footer.php")
  ?>
