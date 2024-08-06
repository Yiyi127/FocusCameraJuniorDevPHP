CREATE DATABASE IF NOT EXISTS focus_camera_db;

USE focus_camera_db;

CREATE TABLE IF NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address VARCHAR(100) NOT NULL
);

-- Insert sample data
INSERT INTO customers (name, email, address) VALUES
('John Doe', 'john@example.com', '123 main st'),
('Jane Smith', 'jane@example.com', '456 Eldridge st');
