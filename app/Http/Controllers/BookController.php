<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Mengambil data buku beserta relasi author-nya
        $books = Book::with('author')->get();
        
        return response()->json([
            'success' => true,
            'message' => 'List Data Books',
            'data'    => $books
        ], 200);
    }
}