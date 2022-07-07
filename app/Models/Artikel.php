<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = "master_artikel";


    const CREATED_AT = 'artikel_create';
    const UPDATED_AT = 'artikel_update';
}
