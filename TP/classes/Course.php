<?php
class Course
{
    public function getShortenName(): string
    {
        return substr($this->name, 0, 18) . '...';
    }

    public function getThumbnailPath(): string
    {
        return 'assets/images/course_thumbnails/' . $this->thumbnail_url;
    }

    public function getFirstLastName(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
