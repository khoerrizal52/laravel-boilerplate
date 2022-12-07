<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = \DB::table('blogs')->orderByDesc('id')->paginate(5);
        return view('admin.viewblog', compact('blogs'));
    }
}
