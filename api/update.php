<?php
require '../vendor/autoload.php';

use Src\Config\Database;
use Src\Controllers\CustomerController;

header('Content-Type: application/json');

$database = new Database();
$db = $database->connect();

$controller = new CustomerController($db);

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['id']) && isset($data['name']) && isset($data['email']) && isset($data['company_name'])) {
    $response = $controller->update($data);
} else {
    $response = ['message' => 'Invalid Data'];
}


error_log("Update response: " . json_encode($response));

echo json_encode($response);
?>
