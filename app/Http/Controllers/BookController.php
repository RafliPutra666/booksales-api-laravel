<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
   public function index()
   {
       $books = Book::all();
       
    //  return view('books', ['books' => $books]);
        return response()->json([
            'success' => true,
            'message' => 'List Data Books',
            'data'    => $books
        ], 200);
   }
}
