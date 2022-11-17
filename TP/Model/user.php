<?php
require_once('Classes/User.php');

class UserModel
{
    public function __construct()
    {
        require_once('Classes/Database.php');
        $this->database = new Database;
        $this->database = $this->database->connection;
    }

    /**
     * Get all users.
     *
     * @return array An array of all the users.
     */
    public function getUsers(): array
    {
        $query = $this->database->query('SELECT id, first_name, last_name, role, thumbnail_url FROM user');
        return $query->fetchAll(PDO::FETCH_CLASS, 'User');
    }

    /**
     * Get an user by its ID.
     *
     * @param  mixed $id The ID of the user.
     * @return User The user object.
     */
    public function getUserById(int $id): ?User
    {
        $query = $this->database->prepare('SELECT first_name, last_name, thumbnail_url, role, address, phone FROM user WHERE id = ?');
        $query->execute([$id]);
        $result = $query->fetchAll(PDO::FETCH_CLASS, 'User');
        return count($result) > 0 ? $result[0] : null;
    }
}
