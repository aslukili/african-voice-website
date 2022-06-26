<?php
/**
 * User: aslukili
 * Date: 7/10/2020
 * Time: 8:07 AM
 */

class m0002_make_events_table {
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `responsible` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `seats` int DEFAULT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_FK` (`responsible`),
  CONSTRAINT `events_FK` FOREIGN KEY (`responsible`) REFERENCES `responsibles` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE events;";
        $db->pdo->exec($SQL);
    }
}