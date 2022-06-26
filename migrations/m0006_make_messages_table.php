<?php
/**
 * User: aslukili
 * Date: 6/18/2022
 * Time: 8:07 AM
 */

class m0006_make_messages_table {
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE messages;";
        $db->pdo->exec($SQL);
    }
}