<?php
require '../vendor/autoload.php';

use Src\Config\Database;
use Src\Controllers\CustomerController;

header('Content-Type: application/json');

$database = new Database();
$db = $database->connect();

$controller = new CustomerController($db);

$data = [
    'name' => $_POST['name'] ?? '',
    'email' => $_POST['email'] ?? '',
    'address' => $_POST['address'] ?? ''
];

error_log("Received data: " . json_encode($data));

$response = $controller->create($data);


error_log("Response: " . json_encode($response));

echo json_encode($response);
?>
