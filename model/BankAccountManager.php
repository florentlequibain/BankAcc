<?php

class BankAccountManager {

  //DB CONNECT
  public function getDb() {
    $db = new PDO('mysql:host=localhost;dbname=CB', "root", "Paperback1966");
    return $db;
  }

  // GET ALL ACCOUNTS
  public function getBankAccounts() {
    //1 Je me connecte à la base de données
    $db = $this->getDb();
    //2 Je récupère toutes les lignes de la base de données avec une requête SQL
    $request = $db->query("SELECT * FROM bankAccount");
    //3 je récupèret = $db->query("SELECT * FROM Us les données sous forme d'un tableau associatif
    $data = $request->fetchAll(PDO::FETCH_ASSOC);
    //Je boucle sur le tableau pour transformer chaque sosu-tableau en objet
    foreach ($data as $key => $value) {
      $data[$key] = new BankAccount($value);
    }
    //5 Je retourne le résultat
    return $data;
  }
  //
  // //ADD ACCOUNT
  // public function addUser(BankAccount $user) {
  //   $db = $this->getDb();
  //   $request = $db->prepare("INSERT INTO User (name, age) VALUES(:name, :age)");
  //   $request->execute([
  //     ":name"=> $user->getName(),
  //     ":age"=> $user->getAge()
  //   ]);
  // }
  //
  // // GET ACCOUNT
  // public function getUser($name) {
  //   $db = $this->getDb();
  //
  //   $request = $db->prepare("SELECT * FROM User WHERE name= ?");
  //   $request->execute([$name]);
  //
  //   $data = $request->fetch(PDO::FETCH_ASSOC);
  //   $user = new User($data);
  //   return $user;
  //
  // }
}

 ?>
