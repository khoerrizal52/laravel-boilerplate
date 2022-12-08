<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Validator;
use Illuminate\Support\Facades\Log;
use \Datetime;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = \DB::table('blogs')->orderByDesc('id')->paginate(5);
        return view('admin.blogs.listblog', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.createblog');
    }

    public function createpost(Request $request, Blog $blog)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator->errors());
        $blog->title = $request->post('title');
        $blog->content = $request->post('content');
        $blog->created_at = new DateTime();
        $blog->updated_at = new DateTime();
        $blog->save();
        return redirect()->intended(route('blog.index'));
    }
}
