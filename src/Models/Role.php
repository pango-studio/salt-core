<?php

namespace Salt\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /** @var string The name of the role */
    public $name;

    use HasFactory;

    protected $guarded = [];

    public static function options()
    {
        return config('core.roles');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_roles')->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany(config('auth.providers.users.model'));
    }
}
