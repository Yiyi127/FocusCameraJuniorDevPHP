CREATE DATABASE IF NOT EXISTS focus_camera_db;

USE focus_camera_db;

CREATE TABLE IF NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    company_name VARCHAR(100) NOT NULL
);

-- Insert sample data
INSERT INTO customers (name, email, company_name) VALUES
('John Doe', 'john@example.com', 'Doe Enterprises'),
('Jane Smith', 'jane@example.com', 'Jane Inc.');
