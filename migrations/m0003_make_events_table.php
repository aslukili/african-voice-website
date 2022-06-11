<?php
/**
 * User: aslukili
 * Date: 7/10/2020
 * Time: 8:07 AM
 */

class m0003_make_events_table {
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE events (
                id INT AUTO_INCREMENT PRIMARY KEY,
	            title varchar(100) NOT NULL,
	            sub_title varchar(255) NULL,
	            country VARCHAR(100) NULL,
                description TEXT NOT NULL,
                responsible VARCHAR(100) NOT NULL,
                seats INT NULL,
                starting_date DATE NOT NULL,
                ending_date DATE NOT NULL
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE events;";
        $db->pdo->exec($SQL);
    }
}