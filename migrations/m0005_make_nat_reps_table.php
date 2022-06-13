<?php
/**
 * User: aslukili
 * Date: 6/13/2022
 * Time: 8:07 AM
 */

class m0005_make_nat_reps_table {
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE nat_reps (
                id INT AUTO_INCREMENT PRIMARY KEY,
	            username varchar(20) UNIQUE NOT NULL,
	            full_name varchar(100) NOT NULL,
	            email VARCHAR(100) UNIQUE NOT NULL,
                country VARCHAR(100) NOT NULL,
                add_date DATE NOT NULL
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE nat_reps;";
        $db->pdo->exec($SQL);
    }
}