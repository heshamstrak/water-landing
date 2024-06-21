<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Blog;
use App\Models\Product;
use App\Models\Gallery;
class HomeController extends Controller
{

    public function index()
    {
        $blogs = Blog::latest()->take(4)->get();
        $products = Product::latest()->take(3)->get();
        $galleries = Gallery::get();
        return view('frontend.home', compact('blogs', 'products', 'galleries'));
=======
use App\Models\Service;
use App\Models\Feature;
use App\Models\Skill;
use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Different;

class HomeController extends Controller
{
    public function index()
    {
        $features = Feature::latest()->take(3)->get();
        $services = Service::latest()->take(6)->get();
        $skills = Skill::latest()->take(5)->get();
        $categories = Category::latest()->take(5)->get();
        $blogs = Blog::latest()->take(3)->get();
        $testimonials = Testimonial::latest()->take(5)->get();
        $partners = Partner::latest()->take(10)->get();
        $differents = Different::latest()->take(10)->get();
        return view('frontend.home', compact('features', 'services', 'skills', 'blogs', 'categories','testimonials', 'partners', 'differents'));
>>>>>>> 5ef127c (update)
    }
}
