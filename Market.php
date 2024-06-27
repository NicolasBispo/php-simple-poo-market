<?php


class Market
{
  public string $name;
  public string $description;
  public bool $completed;

  /** @var Employee[] */
  public array $employees = [];

  /** @var Product[] */
  public array $products = [];

  private User $owner;

  public function __construct(User $owner, string $name, string $description, bool $completed, array $employees)
  {
    $this->owner = $owner;
    $this->name = $name;
    $this->description = $description;
    $this->completed = $completed;
    $this->employees = $employees;
  }

  public function setOwner(User $user): void
  {
    $this->owner = $user;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function isCompleted(): bool
  {
    return $this->completed;
  }
  public function getEmployees()
  {
    return $this->employees;
  }

  public function getProducts(): array{
    return $this->products;
  }

  public function addProduct(Product $product): void{
    $this->products[] = $product;
  }

  public function hireEmployee(Employee $employee): void
  {
    $this->employees[] = $employee;
  }

  public function fireEmployee(Employee $employeeSelected): void
  {
    foreach ($this->employees as $key => $employee) {
      if ($employee === $employeeSelected )  {
        $this->employees[$key]->reset();
        unset( $this->employees[$key] );
        return;
      }
    }
  }

}