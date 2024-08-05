<?php
require '../vendor/autoload.php';

use Src\Config\Database;
use Src\Controllers\CustomerController;

header('Content-Type: application/json');

$database = new Database();
$db = $database->connect();

$controller = new CustomerController($db);

$response = $controller->read();

echo json_encode($response);
?>
