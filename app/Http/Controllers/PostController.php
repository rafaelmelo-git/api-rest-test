<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function status()
    {
        return response()->json(['status' => 'ok']);
    }

    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'titulo' => $request['titulo'],
            'conteudo' => $request['conteudo'],
        ]);
        return response()->json($post);
    }
    public function update(Request $request, Post $post)
    {
        $post->update([
            'titulo' => $request['titulo'],
            'conteudo' => $request['conteudo'],
        ]);
        return response()->json($post);
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json($post);
    }
}
