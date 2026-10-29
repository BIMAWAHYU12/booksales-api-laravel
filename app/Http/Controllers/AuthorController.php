<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Read All
    public function index()
    {
        $authors = Author::all();
        return response()->json([
            'success' => true,
            'message' => 'List Data Authors',
            'data'    => $authors
        ], 200);
    }

    // Create
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        $author = Author::create([
            'name'    => $request->name,
            'country' => $request->country,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Author Berhasil Ditambahkan',
            'data'    => $author
        ], 201);
    }

    // Show (Detail Data & Validasi jika tidak ditemukan)
    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Data Author tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Author',
            'data'    => $author
        ], 200);
    }

    // Update
    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Data Author tidak ditemukan',
            ], 404);
        }

        $request->validate([
            'name'    => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        $author->update([
            'name'    => $request->name,
            'country' => $request->country,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Author Berhasil Diperbarui',
            'data'    => $author
        ], 200);
    }

    // Destroy (Hapus Data)
    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Data Author tidak ditemukan',
            ], 404);
        }

        $author->delete();

        return response()->json([
            'success' => true,
            'message' => 'Author Berhasil Dihapus',
        ], 200);
    }
}