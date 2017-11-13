<?php

class formChecker {
  public function isFormEmpty($form) {
    $erreur;
    foreach ($form as $key => $value) {
      if(empty($form[$key])) {
        $erreur  = "L'entrée " . $key . " est vide";
        return $erreur;
      }
    }
  }
}

 ?>
