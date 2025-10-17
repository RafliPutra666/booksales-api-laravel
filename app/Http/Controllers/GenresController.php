<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function index()
    {
       $genres = Genre::all();
        
    //  return view('genres', ['genres' => $genres]);
        return response()->json([
            'success' => true,
            'message' => 'List Data Genres',
            'data'    => $genres
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $genre = Genre::create([
            'judul' => $request->judul,
            'description' => $request->description,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Genre berhasil ditambahkan',
            'data' => $genre
        ], 201);
    }

}
