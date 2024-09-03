<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AclUserHasPermission extends Model
{
    use HasFactory;

    protected $table = 'acl_user_has_permissions';

    protected $fillable = [
        'user_id',
        'permission_id',
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
