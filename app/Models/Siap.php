<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siap extends Model
{
    use HasFactory;
    protected $table = 'problem';
    protected $primaryKey = 'id_problem';
    protected $guarded = [];
}
