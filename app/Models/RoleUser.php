<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;  //wajib 

class RoleUser extends Pivot
{
    use HasFactory;


    protected $table = 'role_user';
    protected $fillable = [
        'role_id',  
        'user_id',  
    
    ];


}
