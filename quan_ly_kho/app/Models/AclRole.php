<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AclRole extends Model
{
    use HasFactory;

    protected $table = 'acl_roles';

    protected $fillable = [
        'name',
        'display_name',
        'guard_name',
    ];

    public function user()
    {
        return $this->belongsTo(AclUser::class, 'user_id');
    }

    public function permission()
    {
        return $this->belongsTo(AclPermission::class, 'permission_id');
    }
}