<?php

// Nama File: app/Http/Controllers/TransactionController.php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // Read All (Hanya untuk Admin)
    public function index()
    {
        $transactions = Transaction::with(['user', 'book'])->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Transactions',
            'data'    => $transactions
        ], 200);
    }

    // Create (Untuk Customer yang terautentikasi)
    public function store(Request $request)
    {
        $request->validate([
            'book_id'     => 'required|exists:books,id',
            'quantity'    => 'required|integer|min:1',
            'total_price' => 'required|numeric',
        ]);

        $transaction = Transaction::create([
            'user_id'     => $request->user()->id,
            'book_id'     => $request->book_id,
            'quantity'    => $request->quantity,
            'total_price' => $request->total_price,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaksi Berhasil Dibuat',
            'data'    => $transaction
        ], 201);
    }

    // Show Detail (Untuk Customer yang terautentikasi)
    public function show($id)
    {
        $transaction = Transaction::with(['user', 'book'])->find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Data Transaksi tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Transaction',
            'data'    => $transaction
        ], 200);
    }

    // Update (Untuk Customer yang terautentikasi)
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Data Transaksi tidak ditemukan',
            ], 404);
        }

        $request->validate([
            'book_id'     => 'required|exists:books,id',
            'quantity'    => 'required|integer|min:1',
            'total_price' => 'required|numeric',
        ]);

        $transaction->update([
            'book_id'     => $request->book_id,
            'quantity'    => $request->quantity,
            'total_price' => $request->total_price,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaksi Berhasil Diperbarui',
            'data'    => $transaction
        ], 200);
    }

    // Destroy / Delete (Hanya untuk Admin)
    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Data Transaksi tidak ditemukan',
            ], 404);
        }

        $transaction->delete();

        return response()->json([
            'success' => true,
            'message' => 'Transaksi Berhasil Dihapus',
        ], 200);
    }
}