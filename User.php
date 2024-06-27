<?php

class User{
  public ?string $username;
  public ?string $email;
  public ?DateTime $created_at;
  public ?DateTime $updated_at;

  public function __construct(string $username, string $email){
    $this->username = $username;
    $this->email = $email;
    $this->created_at = new DateTime();
    $this->updated_at = new DateTime();
  }

  public function resetUser(){
    $this->username = null;
    $this->email = null;
    $this->created_at = null;
    $this->updated_at = null;
  }

  public function getUsername(): ?string{
    return $this->username;
  }

}