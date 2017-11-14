<?php
  include("template/header.php")
 ?>

<!-- ADD ACCOUNT FORM DROPDOWN -->
 <div class="container_form">

<!-- DROPDOWN BUTTON -->
 <button type="button" class="btn btn-primary button_show_projets"
         onclick="displayYesNo()">Add new Account</button>

    <div id="YesNo" class="container">

      <form action="" method="post">

        <div class="form-group row">
          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input name="account_name" type="text" class="form-control" id="inputEmail3" placeholder="Owner Name">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputAmount" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input name="account_amount" type="number" class="form-control" id="inputPassword3" placeholder="Amount of Money">
          </div>
        </div>

        <input type="submit" name="addAccount" value="Add New Account">
      </form>

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

<!-- SHOW ALL ACCOUNT CLASSES -->
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


<a href="presentation.php">découvrir notre entreprise</a>

 <?php
   include("template/footer.php")
  ?>
