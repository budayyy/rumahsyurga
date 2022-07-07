<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = "users_app";

    const CREATED_AT = 'user_create';
    const UPDATED_AT = 'user_edited';
}
