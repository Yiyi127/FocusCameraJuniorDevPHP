<?php
require '../vendor/autoload.php';

use Src\Config\Database;
use Src\Controllers\CustomerController;

header('Content-Type: application/json');

$database = new Database();
$db = $database->connect();

$controller = new CustomerController($db);

$data = json_decode(file_get_contents("php://input"));

if (isset($data->id)) {
    $response = $controller->delete($data->id);
} else {
    $response = ['message' => 'Invalid ID'];
}


error_log("Delete response: " . json_encode($response));

echo json_encode($response);
?>
