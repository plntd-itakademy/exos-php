<?php
class Professor
{
    public $name;
    public $courseName;

    public function __construct($name, $courseName)
    {
        $this->name = $name;
        $this->courseName = $courseName;
    }
}
