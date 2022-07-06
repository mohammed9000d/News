<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralController extends Controller
{
    //
    public function home()
    {
        $categories = Category::where('status', '=', 'Active')->limit(5)->get();
        $recent_posts = Post::withCount('comments')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
//        $popular_posts = Post::select('posts.*', DB::raw('count(post_id) as total_comments'))
//            ->join('comments', 'posts.id', '=', 'comments.post_id')
//            ->groupBy('posts.id')
//            ->orderBy('total_comments', 'desc')
//            ->limit(3)
//            ->get();
        $popular_posts = Post::withCount('comments')
            ->orderBy('comments_count', 'desc')
            ->limit(3)
            ->get();
        return view('front.home', [
            'recent_posts' => $recent_posts,
            'categories' => $categories,
            'popular_posts' => $popular_posts,
        ]);
    }

    public function postDetails($id){
        $recent_posts = Post::with('category')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $categories = Category::where('status', '=', 'Active')->limit(5)->get();
        $post = Post::findOrFail($id);
        $comments = $post->comments()->orderBy('created_at', 'desc')->limit(4)->get();
        return view('front.post-details', [
            'post' => $post,
            'categories' => $categories,
            'recent_posts' => $recent_posts,
            'comments' => $comments
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

    public function contact() {
        $categories = Category::where('status', '=', 'Active')->limit(5)->get();
        return view('front.contact', [
            'categories' => $categories,
        ]);
    }
}
