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
            'photo' => 'required|string|max:255',
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
    
     public function show($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Author tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Author',
            'data' => $author
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Author tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|string|max:255',
            'bio' => 'nullable|string',
        ]);

        $author->update($request->only('name', 'photo', 'bio'));

        return response()->json([
            'success' => true,
            'message' => 'Author berhasil diperbarui',
            'data' => $author
        ], 200);
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Author tidak ditemukan'
            ], 404);
        }

        $author->delete();

        return response()->json([
            'success' => true,
            'message' => 'Author berhasil dihapus'
        ], 200);
    }
}
