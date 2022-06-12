<?php
/**
 * User: aslukili
 * Date: 6/12/2022
 * Time: 8:07 AM
 */

class m0004_make_members_table {
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE members (
                id INT AUTO_INCREMENT PRIMARY KEY,
	            username varchar(20) UNIQUE NOT NULL,
	            full_name varchar(100) NOT NULL,
	            email VARCHAR(100) UNIQUE NOT NULL,
                country VARCHAR(100) NOT NULL,
                password VARCHAR(250) NOT NULL,
                join_date DATE NOT NULL
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE members;";
        $db->pdo->exec($SQL);
    }
}