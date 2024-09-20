<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'gender', 'age']; 
    protected $table = 'customers'; 

    public function book() 
    {
        return $this->hasOne(Book::class);
    }

    public function profile() 
    {
        return $this->hasOne(Profile::class);
    }
}
