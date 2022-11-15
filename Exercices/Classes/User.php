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

    function __construct(string $username, string $role)
    {
        $this->username = $username;
        $this->role = $role;
    }

    /**
     * Get a welcome message.
     *
     * @return string The welcome message.
     */
    function get_welcome_message(): string
    {
        switch ($this->role) {
            case 'administrator':
                $role = 'administrateur';
                break;
            case 'member':
                $role = 'membre';
                break;
            case 'manager':
                $role = 'gestionnaire';
                break;
            case 'other':
                return 'Bienvenue invité.';
                break;
            default:
                return 'Rôle inconnu.';
                break;
        }

        return 'Bonjour ' . $this->username . ', vous êtes ' . $role . ' du site.';
    }
}
