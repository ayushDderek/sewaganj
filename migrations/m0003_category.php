<?php
class m0001_initial
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE category (
               id INT AUTO_INCREMENT PRIMARY KEY,
               category VARCHAR(255) NOT NULL,
               img_path VARCHAR(255) NOT NULL,
               status TINYINT NOT NULL,
               created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE category;";
        $db->pdo->exec($SQL);
    }
}
