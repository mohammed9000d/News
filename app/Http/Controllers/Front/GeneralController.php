<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function home()
    {
        $categories = Category::where('status', '=', 'Active')->limit(5)->get();
        $recent_posts = Post::with('category')->orderBy('created_at', 'desc')->limit(3)->get();
        return view('front.home', [
            'recent_posts' => $recent_posts,
            'categories' => $categories
        ]);
    }

    public function postDetails($id){
        $recent_posts = Post::with('category')->orderBy('created_at', 'desc')->limit(3)->get();
        $categories = Category::where('status', '=', 'Active')->limit(5)->get();
        $post = Post::findOrFail($id);
        return view('front.post-details', [
            'post' => $post,
            'categories' => $categories,
            'recent_posts' => $recent_posts
        ]);
    }

    public function category($id){
        $categories = Category::where('status', '=', 'Active')->limit(5)->get();
        $recent_posts = Post::with('category')->orderBy('created_at', 'desc')->limit(3)->get();
        $category = Category::findOrFail($id);
        $posts = Post::where('category_id', '=', $id)->get();
        return view('front.category', [
            'posts' => $posts,
            'category' => $category,
            'categories' => $categories,
            'recent_posts' => $recent_posts
        ]);
    }
}
