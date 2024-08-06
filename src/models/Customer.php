<?php
namespace Src\Models;

abstract class Customer {
    protected $conn;
    protected $table = 'customers';

    public $id;
    public $name;
    public $email;
    public $company_name;

    public function __construct($db) {
        $this->conn = $db;
    }

    abstract public function create();
    abstract public function read();
    abstract public function update();
    abstract public function delete();
}
