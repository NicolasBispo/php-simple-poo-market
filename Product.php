<?php

class Product
{
  public ?string $name;
  public ?string $type;
  public ?string $description;

  public function __construct(string $name, ?string $type, ?string $description){
    $this->name = $name;
    $this->type = $type;
    $this->description = $description;
  }
  
}