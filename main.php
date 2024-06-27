<?php

require_once "./Employee.php";
require_once "./Market.php";
require_once "./Product.php";
require_once "./User.php";


$user1 = new User("nicolas_bispo", "nicolas_bm2009@gmail.com");
$user2 = new User("joao", "joao@gmail.com");
$user3 = new User("lucas", "lucas@gmail.com");
$user4 = new User("ricardo", "ricardo@gmail.com");

$market1 = new Market($user1, "Mercado1", "Melhor mercado para comprar frutas", true, []);

$employee1 = new Employee(Role::Seller, $user2, $market1);
$employee2 = new Employee(Role::Stockist, $user3, $market1);
$employee3 = new Employee(Role::Manager, $user4, $market1);

$market1->hireEmployee($employee1);
$market1->hireEmployee($employee2);
$market1->hireEmployee($employee3);

$market1Employees = $market1->getEmployees();

foreach ($market1Employees as $employee) {
  echo $employee->getUsername() . "\n";
}







