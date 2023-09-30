<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
            $data = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'excerpt' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan jenis gambar yang diizinkan dan ukuran maksimum
        ]);

        // Upload gambar
        $gambarPath = $request->file('gambar')->store('uploads', 'public');

        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 10);

        // Simpan posting
        $post = new Post([
            'nama' => $data['nama'],
            'deskripsi' => $data['deskripsi'],
            'gambar' => $gambarPath,
            'excerpt' => $validatedData['excerpt'],
        ]);
        $post->save();

        return redirect('/news');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}