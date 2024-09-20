<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory; 

    protected $fillable = ["owner"];

    protected $table = "apartments";

    public function people() 
    {
        return $this->hasMany(Person::class);
    }
}
