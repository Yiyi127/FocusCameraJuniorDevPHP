<?php
require 'vendor/autoload.php';

use Src\Config\Database;
use Src\Controllers\CustomerController;

$database = new Database();
$db = $database->connect();

$controller = new CustomerController($db);

// Example usage
// Create customer
$data = [
    'name' => 'John Doe',
    'email' => 'john.doe@example.com',
    'company_name' => 'Doe Enterprises'
];
print_r($controller->create($data));

// Read customers
print_r($controller->read());

// Update customer
$data = [
    'id' => 1,
    'name' => 'John Smith',
    'email' => 'john.smith@example.com',
    'company_name' => 'Smith Enterprises'
];
print_r($controller->update($data));

// Delete customer
print_r($controller->delete(1));
