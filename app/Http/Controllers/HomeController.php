<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Resources\AllPostCollection;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return Inertia::render('Home', [
            'posts' => new AllPostCollection($posts),
            'allUsers' => User::all()
        ]);
    }
}
