<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    protected $fillable = ['nombre','description','img','horas'];
    use HasFactory;
}
