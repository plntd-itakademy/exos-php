<?php
class Database
{
    public $connection;

    const USERNAME = 'root';
    const PASSWORD = 'root';

    public function __construct()
    {
        $username = self::USERNAME;
        $password = self::PASSWORD;

        $this->connection = new PDO('mysql:host=localhost;dbname=tp', $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}
