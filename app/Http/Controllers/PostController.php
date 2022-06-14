<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {       
        return view('show', [
            'post' => Post::findOrFail($id)
        ]);
    }
}
