<?php
/**
 * User: aslukili
 * Date: 6/13/2022
 * Time: 8:07 AM
 */

class m0004_make_participations_table {
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE `participations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_fk` varchar(20) NOT NULL,
  `event_fk` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `participations_FK` (`event_fk`),
  KEY `participations_FK_1` (`user_fk`),
  CONSTRAINT `participations_FK` FOREIGN KEY (`event_fk`) REFERENCES `events` (`id`),
  CONSTRAINT `participations_FK_1` FOREIGN KEY (`user_fk`) REFERENCES `users` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE participations;";
        $db->pdo->exec($SQL);
    }
}