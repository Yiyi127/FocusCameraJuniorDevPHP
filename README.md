# Customer Management CRUD Application

This is a simple CRUD application for managing customer entities using PHP. The application demonstrates the following key concepts:
- Data validation and sanitization
- Dependency injection for database connection methods
- Inheritance principle in OOP by reusing code across multiple types of customer

## Features
- Create, Read, Update, and Delete customers
- Customers have the following attributes: `name`, `email`, and `address`
- Frontend interface for managing customers

## Requirements
- PHP 7.4 or higher
- Composer
- MySQL
- Apache server (XAMPP recommended for local development)

## Setup Instructions

### 1. Clone the Repository
```sh
git clone <repository-url>
cd FocusCameraJuniorDevPHP
```
### 2. Install Dependencies
Run the following command to install the necessary PHP dependencies using Composer:
```sh
composer install
```
### 3. Configure the Database
1. Start your Apache and MySQL services (using XAMPP or another method).
2. Create the database and tables by running the init.sql script:
   a. Use phpmyadmin to run:
       login to the phpmyadmin, run the init.sql
   b. Use console to run:
   
```
/path/to/you/mysql -u root -p < init.sql
```
For mac
```
/Applications/XAMPP/xamppfiles/bin/mysql -u root -p < init.sql
```
### 4. Set Up Virtual Host (Optional)
For a better development experience, you can set up a virtual host.

1. Edit your httpd-vhosts.conf file (typically located in /Applications/XAMPP/xamppfiles/etc/extra/httpd-vhosts.conf):
```
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot "/Applications/XAMPP/htdocs/projects/FocusCameraJuniorDevPHP"
    ServerName focuscamera.local
    <Directory "/Applications/XAMPP/htdocs/projects/FocusCameraJuniorDevPHP">
        Options Indexes FollowSymLinks Includes ExecCGI
        AllowOverride All
        Require all granted
    </Directory>
    ErrorLog "logs/focuscamera.local-error.log"
    CustomLog "logs/focuscamera.local-access.log" common
</VirtualHost>
```
2. Edit your hosts file to map the local domain to localhost (typically located in /etc/hosts):
```
127.0.0.1    focuscamera.local
```
3. Restart Apache to apply the changes.

### 5. Running the Application
Open your web browser and navigate to http://focuscamera.local (or http://localhost/FocusCameraJuniorDevPHP if not using a virtual host).

### 6. API Endpoints
POST api/create.php: Create a new customer
GET api/read.php: Read all customers
POST api/update.php: Update a customer
POST api/delete.php: Delete a customer

### 7. Frontend Interface
The frontend interface for managing customers is provided in index.html. This interface interacts with the backend via the above API endpoints to perform CRUD operations.

## Directory Structure
```
FocusCameraJuniorDevPHP/
│
├── api/
│   ├── create.php
│   ├── delete.php
│   ├── read.php
│   └── update.php
│
├── src/
│   ├── Config/
│   │   └── Database.php
│   ├── Controllers/
│   │   └── CustomerController.php
│   ├── Models/
│   │   ├── CorporateCustomer.php
│   │   └── Customer.php
│   ├── Services/
│   │   └── CustomerService.php
│   └── Utils/
│       └── Validator.php
│
├── vendor/
│   └── autoload.php
│
├── init.sql
├── composer.json
├── index.php
└── index.html
```
