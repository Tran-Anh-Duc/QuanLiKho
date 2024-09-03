<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AclRoleHasPermission extends Model
{
    use HasFactory;

    protected $table = 'acl_role_has_permissions';

    protected $fillable = [
        'role_id',
        'permission_id',
    ];

    public function role()
    {
        return $this->belongsTo(AclRole::class, 'role_id');
    }

    public function permission()
    {
        return $this->belongsTo(AclPermission::class, 'permission_id');
    }
}
