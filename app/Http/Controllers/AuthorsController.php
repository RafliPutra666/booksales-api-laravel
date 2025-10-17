<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index()
    {
       $authors = Author::all();

        // return view('authors', ['authors' => $authors]);
        return response()->json([
            'success' => true,
            'message' => 'List Data Authors',
            'data'    => $authors
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|string|max:255', // bisa berupa URL atau path
            'bio' => 'nullable|string',
        ]);

        $author = Author::create([
            'name' => $request->name,
            'photo' => $request->photo,
            'bio' => $request->bio,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Author berhasil ditambahkan',
            'data' => $author
        ], 201);
    }
    

}
