<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AclPermission extends Model
{
    use HasFactory;

    protected $table = 'acl_permissions';

    protected $fillable = [
        'name',
        'display_name',
        'guard_name',
    ];

    public function user()
    {
        return $this->belongsTo(AclUser::class, 'user_id');
    }

    public function role()
    {
        return $this->hasOne(AclRole::class, 'permission_id');
    }
}
