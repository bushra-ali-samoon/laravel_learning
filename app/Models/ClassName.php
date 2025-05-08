<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassName extends Model
{
    protected $table = 'classes'; // because default would be `class_names`
    protected $fillable = ['name']; // allow mass assignment
}
