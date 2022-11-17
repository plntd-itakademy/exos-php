<?php
require_once('Classes/Course.php');

class CourseModel
{
    public function __construct()
    {
        require_once('Classes/Database.php');
        $this->database = new Database;
        $this->database = $this->database->connection;
    }

    /**
     * Get all courses.
     *
     * @return array An array of all the courses.
     */
    public function getCourses(): array
    {
        $query = $this->database->query('SELECT * FROM course');
        return $query->fetchAll(PDO::FETCH_CLASS, 'Course');
    }

    /**
     * Get a course by its ID.
     *
     * @param  mixed $id The ID of the course.
     * @return User The course object.
     */
    public function getCourseById(int $id): ?Course
    {
        $query = $this->database->prepare('SELECT name, course.thumbnail_url, first_name, last_name, description, code FROM user INNER JOIN course ON user.id = course.user_id WHERE course.id = ?');
        $query->execute([$id]);
        $result = $query->fetchAll(PDO::FETCH_CLASS, 'Course');
        return count($result) > 0 ? $result[0] : null;
    }
}
