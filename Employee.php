<?php
require "./User.php";

enum Role: string {
  case Stockist = "Stockist";
  case Seller = "Seller";
  case Manager = "Manager";
  case Security = "Security";
}
class Employee extends User{

  public ?Role $role;

  public ?Market $market;

  public function __construct(Role $role, User $user, Market $market){
    parent::__construct($user->username, $user->email);
    $this->role = $role;
    $this->market = $market;
    $this->market = $market;
    
  }

  public function getRole(){
    return $this->role;
  }

  public function reset(){
    $this->role = null;
    $this->market = null;
  }
  
}