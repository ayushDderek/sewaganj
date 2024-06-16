<?php

class m0005_add_usertype_column
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN usertype VARCHAR(512) NOT NULL;");
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users DROP COLUMN usertype;");
    }
}