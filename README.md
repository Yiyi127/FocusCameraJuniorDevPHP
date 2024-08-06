# Customer Management CRUD Application

This is a simple CRUD application for managing customer entities using PHP. The application demonstrates the following key concepts:
- Data validation and sanitization
- Dependency injection for database connection methods
- Inheritance principle in OOP by reusing code across multiple types of customer

## Features
- Create, Read, Update, and Delete customers
- Customers have the following attributes: `name`, `email`, and `address`
- Frontend interface for managing customers
- **Data validation and sanitization:** User input is sanitized and validated using the `Validator` class to protect against SQL injection.
- **Dependency injection:** The `Database` class is used to inject database connection methods into other classes.
- **Inheritance principle:** The `Customer` class is extended by the `CorporateCustomer` class to reuse code across multiple types of customers.

## Requirements
- PHP 7.4 or higher
- Composer
- MySQL
- Apache server (XAMPP recommended for local development)

## Implementation Details

### 1. Data Validation and Sanitization
- **Explanation**: User input is sanitized and validated to protect against SQL injection.
- **How It's Done**: The `Validator` class provides methods to sanitize and validate strings, emails, and integers. These methods are used in the `CustomerController` to ensure all user inputs are clean and valid before processing.

### 2. Dependency Injection
- **Explanation**: Dependency injection is used for database connection methods.
- **How It's Done**: The `Database` class creates a PDO connection, which is then injected into the `CustomerService` and `CustomerController` classes. This allows for a clean separation of concerns and easier testing.

### 3. Inheritance Principle
- **Explanation**: Demonstrates the inheritance principle by reusing code across multiple types of customers.
- **How It's Done**: An abstract `Customer` class is created, which contains common properties and methods. The `CorporateCustomer` class extends this abstract class, implementing the specific logic for managing corporate customers.


## Setup Instructions

### 1. Clone the Repository
The branch I'm using is the main, I also set this one as the default branch. But just in case if you are on different branch, change it to main.
```sh
git clone https://github.com/Yiyi127/FocusCameraJuniorDevPHP.git
cd FocusCameraJuniorDevPHP
```
### 2. Install Dependencies
Run the following command to install the necessary PHP dependencies using Composer:
```sh
composer install
```
### 3. Configure the Database
- 1. Start your Apache and MySQL services (using XAMPP or another method).
- 2. Create the database and tables by running the init.sql script:
  - 1. Use phpmyadmin to run:
       login to the phpmyadmin, run the init.sql
  - 2. Use console to run:
   
```
/path/to/you/mysql -u root -p < init.sql
```
For mac
```
/Applications/XAMPP/xamppfiles/bin/mysql -u root -p < init.sql
```
### 4. Set Up Virtual Host (Optional)
For a better development experience, you can set up a virtual host.

- 1. Edit your httpd-vhosts.conf file (typically located in /Applications/XAMPP/xamppfiles/etc/extra/httpd-vhosts.conf):
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
- 2. Edit your hosts file to map the local domain to localhost (typically located in /etc/hosts):
```
127.0.0.1    focuscamera.local
```
- 3. Restart Apache to apply the changes.

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
## Other
- 1. In case the project doesn't run in your computer, I recorded a video of me showing all CRUD functions on this website.
- 2. In case sometimes the CRUD is not working, just refresh the page.
