# phprestapi

phprestapi is a PHP-based RESTful API that provides Create, Read, Update, and Delete (CRUD) operations for managing data stored in a MySQL database. This project serves as a foundational template for building robust APIs in PHP, facilitating seamless interaction between clients and servers in web applications.

# Features
RESTful Architecture: Adheres to REST principles, ensuring stateless communication and standardized methods.
CRUD Operations: Supports Create, Read, Update, and Delete functionalities for database records.
JSON Responses: Returns data in JSON format for easy consumption by various clients.
Error Handling: Implements comprehensive error handling to provide meaningful HTTP status codes and messages.
Security Measures: Incorporates basic security practices, including input validation and sanitization.
Prerequisites
PHP: Version 7.2 or higher.
MySQL: Version 5.7 or higher.
Composer: Dependency management tool for PHP.
Installation
Clone the Repository:

bash
Copy code
git clone https://github.com/AkashYadav8080/phprestapi.git
cd phprestapi
Install Dependencies:

Use Composer to install the required dependencies:

bash
Copy code
composer install
Configure Environment Variables:

Duplicate the .env.example file and rename it to .env. Update the database connection settings within the .env file:

env
Copy code
DB_HOST=your_database_host
DB_NAME=your_database_name
DB_USER=your_database_user
DB_PASS=your_database_password
Set Up the Database:

Execute the provided SQL script to create the necessary database tables:

bash
Copy code
php scripts/setup_database.php
Start the Development Server:

Utilize PHP's built-in server to run the application:

bash
Copy code
php -S localhost:8000 -t public
The API will be accessible at http://localhost/phprestapi/index.html

API Endpoints
The following endpoints are available for interacting with the API:

# Create-a-Record:

Endpoint: POST /api-insert.php/
Description: Adds a new record to the database.
Request Body: JSON object containing the record details.
Retrieve All Records:

Endpoint: GET /api-fetch-all.php
Description: Fetches all records from the database.
Retrieve a Single Record:

Endpoint: GET /api-fetch-single.php?sid={}
Description: Retrieves a specific record by its ID.
Update a Record:

Endpoint: PUT /api-update.php?eid={}
Description: Updates the details of an existing record.
Request Body: JSON object containing the updated record details.
Delete a Record:

Endpoint: DELETE /api-delete.php?sid={}
Description: Removes a record from the database.
Error Handling
The API returns standard HTTP status codes to indicate the outcome of operations:

### 200 OK: Successful read operation.
### 201 Created: Successful creation of a resource.
### 400 Bad Request: Invalid request parameters.
### 404 Not Found: Resource not found.
### 500 Internal Server Error: Server encountered an error.

Security Considerations
While this project includes basic input validation and sanitization, it is crucial to implement additional security measures for production environments, such as:

Authentication and Authorization: Ensure that only authorized users can access or modify data.
Data Validation: Implement comprehensive validation to prevent SQL injection and other vulnerabilities.
HTTPS: Use SSL/TLS to encrypt data transmitted between the client and server.
Contributing
Contributions are welcome! Please fork the repository and create a pull request with your enhancements or bug fixes.

# License
This project is licensed under the MIT License. See the LICENSE file for details.

# Acknowledgments
This project was inspired by various tutorials and open-source projects that demonstrate building RESTful APIs in PHP. Notably, the PHP-CRUD-API project provided valuable insights into creating efficient APIs. 
