# Evently
**events manager for associations and organizations**

This web app is built with vanilla PHP with an MVC architectural pattern.

The big part of this project is to build the MVC microframework itself (the core folder). this microframework contains the following features:

- routing
- middlewares
- exceptions
- Database connection with basic queries (auth and CRUD operation)
- sessions
- migrations

it is a cms for creating events and managing participants

to run the application:

1- clone the repo:
`git clone https://github.com/aslukili/evently`

2- install node modules

`npm install`

3- Create a database schema (mysql db)

4- Create `.env` file from `.env.example` file and adjust database parameters (including schema name)

3- install php required packages

`composer install`

4- run migrations from root dir

`php migrations.php`

5- start the app from /public folder and open it from your browser

`php -S localhost:9090`


the app is barely works :)

to  discover what you can do, just add /dashboard in the url and you'll be redirected to the admin dashboard xd, adjust user roles from your database; by default any new registered user has full privilages.
