<?php

namespace Salt\Core\Options;

class RoleOptions
{
    public const SUPER_ADMIN = [
        'name' => 'super-admin',
        'label' => 'Super Admin',
    ];
    public const ADMIN = [
        'name' => 'admin',
        'label' => 'Admin',
    ];
    public const USER = [
        'name' => 'user',
        'label' => 'User',
    ];

    public static $rolesArray = [
        self::SUPER_ADMIN,
        self::ADMIN,
        self::USER,
    ];
}
