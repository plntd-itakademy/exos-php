<?php
class User
{
    public function getFirstLastName(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getThumbnailPath(): string
    {
        return 'assets/images/user_thumbnails/' . $this->thumbnail_url;
    }
}
