<?php

class BankAccount {

  protected $idAccount;
  protected $nameAccount;
  protected $amountOfMoney;


  //SETTERS
  public function setNameAccount($nameAccount){
    $this->nameAccount = $nameAccount;
  }

  public function setAmountOfMoney($amountOfMoney){
    $this->amountOfMoney = $amountOfMoney;
  }

  //GETTERS
  public function getNameAccount() {
    return $this->nameAccount;
  }

  public function getAmountOfMoney() {
    return $this->amountOfMoney;
  }

  // CONSTRUCT
  public function __construct(array $data) {
    foreach ($data as $key => $value) {
      $method = "set" . ucfirst($key);
      if(method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }
}


 ?>
