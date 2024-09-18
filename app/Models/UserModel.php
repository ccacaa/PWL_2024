<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    //js-4 prak 1 (1)
    // protected $fillable = ['level_id', 'username', 'nama', 'password'];

    //js-4 prak 1 (4)
    protected $fillable = ['level_id', 'username', 'nama'];
}