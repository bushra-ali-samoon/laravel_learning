<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //xtends Controller

    // Show the student registration form
    public function showbooks()
    {
        return view('books.form');  
    }

    // Save the student to database
   
        public function saveBook(Request $request)
        {
            $book = new Book;
            $book->title = $request->title;
            $book->author = $request->author;
            $book->genre = $request->genre;  
            $book->save();
        
            return "Book saved successfully!";
        }
        
    
    
}

