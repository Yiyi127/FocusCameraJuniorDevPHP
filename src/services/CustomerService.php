<?php
namespace Src\Services;

use Src\Models\CorporateCustomer;

class CustomerService {
    private $db;
    private $customer;

    public function __construct($db) {
        $this->db = $db;
        $this->customer = new CorporateCustomer($db);
    }

    public function createCustomer($data) {
        $this->customer->name = $data['name'];
        $this->customer->email = $data['email'];
        $this->customer->address = $data['address'];

        if ($this->customer->create()) {
            return ['message' => 'Customer Created'];
        }

        return ['message' => 'Customer Not Created'];
    }

    public function readCustomers() {
        $result = $this->customer->read();
        $num = $result->rowCount();

        if ($num > 0) {
            $customers = [];
            while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
                extract($row);
                $customers[] = [
                    'id' => $id,
                    'name' => $name,
                    'email' => $email,
                    'address' => $address
                ];
            }
            return $customers;
        }

        return [];
    }

    public function updateCustomer($data) {
        $this->customer->id = $data['id'];
        $this->customer->name = $data['name'];
        $this->customer->email = $data['email'];
        $this->customer->address = $data['address'];

        if ($this->customer->update()) {
            return ['message' => 'Customer Updated'];
        }

        return ['message' => 'Customer Not Updated'];
    }

    public function deleteCustomer($id) {
        $this->customer->id = $id;

        if ($this->customer->delete()) {
            return ['message' => 'Customer Deleted'];
        }

        return ['message' => 'Customer Not Deleted'];
    }
}
