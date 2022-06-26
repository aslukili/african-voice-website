<?php
/**
 * User: aslukili
 * Date: 6/18/2022
 * Time: 8:07 AM
 */

class m0005_make_newsletter_table {
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE `newsletter` (
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE newsletter;";
        $db->pdo->exec($SQL);
    }
}