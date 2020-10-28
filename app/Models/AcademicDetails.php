<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicDetails extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'matric_number',
      'access_code',
      'level'
    ];
}
