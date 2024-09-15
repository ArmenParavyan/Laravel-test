<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory; 

    protected $fillable = ['author', 'title', 'email', 'age', 'is_book', 'birthday', 'customer_id'];
    protected $table = 'books';

    public function customer() 
    {
        return $this->belongsTo(Customer::class);
    }
}
