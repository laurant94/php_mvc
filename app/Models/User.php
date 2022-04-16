<?php
namespace App\Models;

class User
{
  private $id;
  private $firstname;
  private $lastname;
  private $phone;


  public function getId(){
    return $this->id;
  }
  public function getFirstname(){
    return $this->firstname;
  }
  public function getLastname(){
    return $this->lastname;
  }
  public function getPhone(){
    return $this->phone;
  }

  public function setFirstname(string $firstname)
  {
    $this->firstname = $firstname;
  }
  

}
