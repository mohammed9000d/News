<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class PostTrash extends Component
{
    use WithPagination;
    use AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $this->authorize('view-trash', Post::class);
        $posts = Post::onlyTrashed()->paginate(5);
        return view('livewire.posts.post-trash', [
            'posts' => $posts
        ]);
    }

    public function restore($id = null)
    {
        if ($id) {
            $category = Post::onlyTrashed()->find($id);
            $this->authorize('restore', $category);
            $category->restore();
            $this->dispatchBrowserEvent('toast', ['type' => 'success', 'message' => 'Restored All Posts Successfully!']);
            return;
        }
        $posts = Post::onlyTrashed();
        $this->authorize('restore', $posts);
        $posts->restore();
        $this->dispatchBrowserEvent('toast', ['type' => 'success', 'message' => 'Restored All Posts Successfully!']);
    }

    public function force_delete($id = null)
    {
        if ($id != null) {
            $category = Post::onlyTrashed()->find($id);
            $this->authorize('force-delete', $category);
            $category->forceDelete();
            return;
        }
        $posts = Post::onlyTrashed();
        $this->authorize('force-delete', $posts);
        $posts->forceDelete();
    }
}
