<?php
/**
 * User: aslukili
 * Date: 6/18/2022
 * Time: 8:07 AM
 */

class m0006_make_participations_table {
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE participations (
	            fk_user int NOT NULL,
	            fk_event int NOT NULL,
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