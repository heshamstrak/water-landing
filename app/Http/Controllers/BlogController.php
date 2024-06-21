<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
<<<<<<< HEAD

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::paginate(15);
        return view('frontend.blogs.index', compact('blogs'));
    }

    public function blog($slug, Blog $blog) {
        return view('frontend.blogs.blog', compact('blog'));
=======
class BlogController extends Controller
{


    public function singleBlog(Blog $blog) {
        $blogs = Blog::latest()->take(5)->get();
        return view('frontend.blogs.single-blog', compact('blog', 'blogs'));
>>>>>>> 5ef127c (update)
    }
}
