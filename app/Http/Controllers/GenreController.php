<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Read All
    public function index()
    {
        $genres = Genre::all();
        return response()->json([
            'success' => true,
            'message' => 'List Data Genres',
            'data'    => $genres
        ], 200);
    }

    // Create
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre = Genre::create([
            'name' => $request->name
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Genre Berhasil Ditambahkan',
            'data'    => $genre
        ], 201);
    }

    // Show (Detail Data & Validasi jika tidak ditemukan)
    public function show($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Data Genre tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Genre',
            'data'    => $genre
        ], 200);
    }

    // Update
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Data Genre tidak ditemukan',
            ], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre->update([
            'name' => $request->name
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Genre Berhasil Diperbarui',
            'data'    => $genre
        ], 200);
    }

    // Destroy (Hapus Data)
    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Data Genre tidak ditemukan',
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'success' => true,
            'message' => 'Genre Berhasil Dihapus',
        ], 200);
    }
}