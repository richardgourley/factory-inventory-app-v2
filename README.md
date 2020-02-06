# Factory Inventory App - version 2
A web based app MVC app written in PHP without a framework.
The app is written to connect to and set up the database tables on first use.
There is a Model and Controller base class and a DbSetUp and Handler class.
The database table has PRODUCTS, USERS and PRIVELIGES tables.
The app utilizes sessions with a login and logout system.

Users with priveliges_id '1' can add, edit and delete products and users.
Users with priveliges_id '2' can only view all products.

## SKILLS COVERED
* User management - user priveliges limit actions some users can perform.
* PDO connection without a specific database.
* PDO database connection
* Setting up database and tables from within an app.
* Sessions
* Login/ logout
* Form handling
* Regular expressions
* Relational database tables
* PHP Password hashing functions
   * password_verify()
   * password_hash()
