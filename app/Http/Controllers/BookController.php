<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $data = Book::paginate(10);
        return view('book', compact('data')); // compact('data')-ով $data-ն ուղարկում ենք book-ի մեջ
    }


    public function create() {
        // $data = ['author' => 'Karen', 'title' => 'Nature', 'email' => 'karen@gmail.com', 
        //         'age' => 32, 'is_book' => true, 'birthday' => '1990:05:24']; 
        // $book = Book::create($data);
        // dd($book);
    }
}
