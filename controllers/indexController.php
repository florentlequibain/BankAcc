<?php
//LOAD CLASSES AND SERVICES
require_once("../model/BankAccountManager.php");
require_once("../services/formChecker.php");
require_once("../entities/BankAccount.php");

$BankAccountManager = new BankAccountManager();
$FormChecker = new formChecker();

//On récupère un tableau contenant les infos utilisateur depuis la BD
$bankAccounts = $BankAccountManager->getBankAccounts();

//II Executer la logiques (if, variables, transformations...)
//
// //Check si l'utilisateur a soumis un enregistrement de User
// if(!empty($_POST["addUser"])) {
//
//   //1 Vérifie la qualité des informations transmises
//   $erreur  = $FormChecker->isFormEmpty($_POST);
//   if(!empty($erreur)) {
//     echo $erreur;
//   }
//   else{
//     //2 Si tout est ok instancie un objet sur la base de $_POST
//     $user = new User($_POST);
//     //3 Enregistre l'objet en base de données
//     $UserManager->addUser($user);
//   }
// }
//

// 3 Afficher la vue
include "../views/indexView.php";
 ?>
