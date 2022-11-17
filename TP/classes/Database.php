<?php
class Database
{
    const USERNAME = 'root';
    const PASSWORD = 'root';

    static function Connect()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=tp', self::USERNAME, self::PASSWORD, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (Exception $e) {
            die('Erreur lors de la connexion à la base de données.');
        }
    }
}
