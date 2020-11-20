<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Retornando todos os posts.
     *
     * @return string JSON
     */
    public function index()
    {
        return response()->json(
            Post::all()
        );
    }
}
