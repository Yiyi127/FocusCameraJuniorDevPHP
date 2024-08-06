<?php
namespace Src\Controllers;

use Src\Services\CustomerService;
use Src\Utils\Validator;

class CustomerController {
    private $customerService;

    public function __construct($db) {
        $this->customerService = new CustomerService($db);
    }

    public function create($data) {
        $data['name'] = Validator::sanitizeString($data['name']);
        $data['email'] = Validator::sanitizeEmail($data['email']);
        $data['company_name'] = Validator::sanitizeString($data['company_name']);

        if (!Validator::validateEmail($data['email'])) {
            return ['message' => 'Invalid Email'];
        }

        return $this->customerService->createCustomer($data);
    }

    public function read() {
        return $this->customerService->readCustomers();
    }

    public function update($data) {
        $data['id'] = Validator::sanitizeInt($data['id']);
        $data['name'] = Validator::sanitizeString($data['name']);
        $data['email'] = Validator::sanitizeEmail($data['email']);
        $data['company_name'] = Validator::sanitizeString($data['company_name']);

        if (!Validator::validateEmail($data['email'])) {
            return ['message' => 'Invalid Email'];
        }

        return $this->customerService->updateCustomer($data);
    }

    public function delete($id) {
        $id = Validator::sanitizeInt($id);
        return $this->customerService->deleteCustomer($id);
    }
}
