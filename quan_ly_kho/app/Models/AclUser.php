<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AclUser extends Model
{
    use HasFactory;

    protected $table = 'acl_users';

    protected $fillable = [
        'username',
        'password',
        'last_name',
        'first_name',
        'gender',
        'birthday',
        'avatar',
        'code',
        'job_title',
        'manager_id',
        'phone',
        'address1',
        'address2',
        'city',
        'state',
        'postal_code',
        'country',
        'remember_token',
        'active_code',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function manager()
    {
        return $this->belongsTo(AclUser::class, 'manager_id');
    }

    public function subordinates()
    {
        return $this->hasMany(AclUser::class, 'manager_id');
    }

    public function permission()
    {
        return $this->hasOne(AclPermission::class, 'user_id');
    }

    public function role()
    {
        return $this->hasOne(AclRole::class, 'user_id');
    }
}
