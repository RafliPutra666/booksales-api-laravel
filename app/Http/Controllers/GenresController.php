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

      public function show($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Genre',
            'data' => $genre
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'judul' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $genre->update($request->only('judul', 'description'));

        return response()->json([
            'success' => true,
            'message' => 'Genre berhasil diperbarui',
            'data' => $genre
        ], 200);
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre tidak ditemukan'
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'success' => true,
            'message' => 'Genre berhasil dihapus'
        ], 200);
    }

}
