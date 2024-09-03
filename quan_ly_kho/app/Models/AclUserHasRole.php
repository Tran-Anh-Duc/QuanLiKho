<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AclUserHasRole extends Model
{
    use HasFactory;

    protected $table = 'acl_user_has_roles';

    protected $fillable = [
        'user_id',
        'role_id',
    ];

    public function user()
    {
        return $this->belongsTo(AclUser::class, 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(AclRole::class, 'role_id');
    }
}
