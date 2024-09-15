<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cours_customer', 'customer_id', 'cours_id'];

    protected $table = 'courses';
}
