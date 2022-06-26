# Evently
**events manager for associations and organizations**

This website is built with native PHP with an MVC architectural pattern.

to run the application:

1- clone the repo:
`git clone https://github.com/aslukili/evently`

2- install node modules
`npm install`

3- Create a database schema (mysql db)

4- Create `.env` file from `.env.example` file and adjust database parameters (including schema name)

3- install php required packages
`composer update`

4- run migrations from root dir
`php migrations.php`

5- start the app from /public folder and open it from your browser
`php -S localhost:9090`