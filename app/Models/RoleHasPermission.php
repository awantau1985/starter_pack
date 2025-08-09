<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleHasPermission extends Model
{
    protected $table = 'role_has_permissions';
    protected $fillable =[
        'permission_id',
        'role_id'
    ];

    public function toRole(){
        return $this->belongsTo(Role::class,'role_id','id');
    }

    public function toPermission(){
        return $this->belongsTo(Permission::class,'permission_id','id');
    }
}
