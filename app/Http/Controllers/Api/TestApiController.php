<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class TestApiController extends Controller
{
    public function index()
    {
        return Post::all();
    }
}
