<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comments;

class CommentController extends Controller
{
    /**
     * Tampilkan semua komentar
     */
    public function index()
    {
        // Mengambil semua komentar terbaru terlebih dahulu
        $comments = Comments::latest()->paginate(20); // Bisa diganti sesuai kebutuhan

        // Menampilkan view admin.comments.index dengan data komentar
        return view('admin.comment', compact('comments'));
    }


    /**
     * Simpan komentar baru
     */
    public function store(Request $request, $articleId)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Comments::create([
            'article_id' => $articleId,
            'user_id' => $request->user()->id,
            'name' => $request->user()->name,
            'email' => $request->user()->email,
            'body' => $request->input('content'),
            'status' => 'pending', // atau sesuai kebutuhan
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan dan menunggu persetujuan.');
    }

    /**
     * Hapus komentar
     */
    public function destroy($id)
    {
        $comment = Comments::findOrFail($id); // Cari komentar berdasarkan ID

        $comment->delete(); // Hapus komentar

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.comments.index')->with('success', 'Komentar berhasil dihapus.');
    }
}
