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
        $categories = Category::active()->limit(5)->get();
        $recent_posts = Post::with('category')->active()
            ->withCount('comments')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $popular_posts = Post::with('category')->active()
            ->withCount('comments')
            ->orderBy('comments_count', 'desc')
            ->limit(3)
            ->get();
        $posts_today = Post::with('category')->active()
            ->where('created_at', '>=', now()->startOfDay())
            ->withCount('comments')
            ->limit(6)
            ->get();
        return view('front.home', [
            'recent_posts' => $recent_posts,
            'categories' => $categories,
            'popular_posts' => $popular_posts,
            'posts_today' => $posts_today,
        ]);
    }

    public function searchPosts(Request $request) {
        $categories = Category::active()->limit(5)->get();
        $recent_posts = Post::with('category')->active()
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $search = $request->get('search');
        $posts = Post::with('category')->active()
            ->where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('short_description', 'LIKE', '%' . $search . '%')
            ->orWhere('full_description', 'LIKE', '%' . $search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        $title = 'Search results for: ' . $search;
        return view('front.category', [
           'categories' => $categories,
            'recent_posts' => $recent_posts,
            'posts' => $posts,
            'title' => $title,
        ]);
    }

    public function postDetails($id){
        $recent_posts = Post::with('category')->active()
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $categories = Category::active()->limit(5)->get();
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
        $categories = Category::active()->limit(5)->get();
        $recent_posts = Post::with('category')->active()
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $category = Category::findOrFail($id);
        $posts = Post::with('category')->active()->whereHas('category', function ($query) use ($id) {
            $query->where('id', '=', $id);
        })->withCount('comments')->paginate(5);
        return view('front.category', [
            'posts' => $posts,
            'category' => $category,
            'categories' => $categories,
            'recent_posts' => $recent_posts,
        ]);
    }

    public function contact() {
        $categories = Category::with('category')->active()->limit(5)->get();
        return view('front.contact', [
            'categories' => $categories,
        ]);
    }

    public function popularPosts() {
        $categories = Category::active()->limit(5)->get();
        $recent_posts = Post::with('category')->active()
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $posts = Post::with('category')->active()
            ->select('posts.*', DB::raw('count(comments.id) as comments_count'))
            ->leftJoin('comments', 'comments.post_id', '=', 'posts.id')
            ->groupBy('posts.id')
            ->having('comments_count', '>=', 10)
            ->orderBy('comments_count', 'desc')
            ->paginate(5);
        $title = 'Popular Posts';
        return view('front.category', [
            'posts' => $posts,
            'categories' => $categories,
            'recent_posts' => $recent_posts,
            'title' => $title,
        ]);
    }

    public function recentPosts() {
        $categories = Category::active()->limit(5)->get();
        $recent_posts = Post::with('category')->active()
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $posts = Post::with('category')->active()
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        $title = 'Recent Posts';
        return view('front.category', [
            'posts' => $posts,
            'categories' => $categories,
            'recent_posts' => $recent_posts,
            'title' => $title,
        ]);
    }

    public function allPostsToday()
    {
        $categories = Category::active()->limit(5)->get();
        $recent_posts = Post::with('category')->active()
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $posts_today = Post::with('category')->active()
            ->where('created_at', '>=', now()->startOfDay())
            ->withCount('comments')
            ->paginate(5);
        $title = 'All Posts Today';
        return view('front.category', [
            'posts' => $posts_today,
            'categories' => $categories,
            'recent_posts' => $recent_posts,
            'title' => $title,
        ]);
    }

    public function profile() {
        $categories = Category::active()->limit(5)->get();
        return view('front.profile', [
            'categories' => $categories,
        ]);
    }
}
