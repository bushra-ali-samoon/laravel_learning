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
        

public function allBooks()
{
    $books = Book::get(); // same as Book::all()
    return view('books.form', compact('books'));
}

    public function booksByAuthor($author)
{
    $books = Book::where('author', $author)->get();
    return view('books.author', compact('books'));
}
public function updateBook(Request $request, $id)
{
    Book::where('id', $id)->update([
        'title' => $request->title,
        'author' => $request->author,
        'genre' => $request->genre
    ]);

    return "Book updated!";
}
// public function saveBook(Request $request)
// {
//     $data = $request->only(['title', 'author', 'genre']);

//     $book = new Book;
//     $book->fill($data); // Make sure Book model has `fillable` defined!
//     $book->save();

//     return "Book saved!";
// }

}

