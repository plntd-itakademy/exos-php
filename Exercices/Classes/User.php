<?php
class User
{
    public $username;
    public $role;

    const ROLES = [
        'administrator',
        'member',
        'manager',
        'other'
    ];

    function __construct($username, $role)
    {
        $this->username = $username;
        $this->role = $role;
    }
}
