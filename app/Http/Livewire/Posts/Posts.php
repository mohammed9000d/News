<?php

namespace App\Http\Livewire\Posts;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use function view;

class Posts extends Component
{
    use WithFileUploads;
    use WithPagination;
    use AuthorizesRequests;

    protected $paginationTheme = 'bootstrap';
    public $name, $image, $category_id, $short_description,
        $full_description, $selected_id, $status, $forEditImage;

    public function render()
    {
        $this->authorize('view-any', Post::class);
        return view('livewire.posts.posts', [
            'posts' => Post::paginate(5),
            'categories' => Category::all()
        ]);
    }

    public function resetInputs()
    {
        $this->name = null;
        $this->short_description = null;
        $this->full_description = null;
        $this->category_id = null;
        $this->image = null;
        $this->status = true;
        $this->forEditImage = null;
    }

    public function store()
    {
        $this->authorize('create', Post::class);
        $this->validate([
            'name' => 'required|string|max:255|min:3|unique:posts,name',
            'short_description' => 'nullable|string|min:3',
            'full_description' => 'nullable|string|min:3',
            'category_id' => 'required|integer|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'status' => 'boolean',
        ]);
        $post = Post::create($this->all());
        if ($post) {
            $this->resetInputs();
            $this->dispatchBrowserEvent('toast', ['type' => 'success', 'message' => 'Created Post Successfully!']);
            return;
        }
        $this->dispatchBrowserEvent('toast', ['type' => 'error', 'message' => 'Failed to create Post!']);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $this->authorize('update', $post);
        $this->name = $post->name;
        $this->short_description = $post->short_description;
        $this->full_description = $post->full_description;
        $this->category_id = $post->category_id;
        $post->status == 'Active' ? $this->status = true : $this->status = false;
        $this->selected_id = $id;
        $this->forEditImage = $post->image_url;
    }

    public function update() {
        $this->validate([
            'name' => 'required|string|max:255|min:3|unique:posts,name,'.$this->selected_id,
            'short_description' => 'nullable|string|min:3',
            'full_description' => 'nullable|string|min:3',
            'category_id' => 'required|integer|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'status' => 'boolean',
        ]);
        $post = Post::find($this->selected_id);
        $this->authorize('update', $post);
        $isUpdated = $post->update($this->all());
        if ($isUpdated) {
            $this->resetInputs();
            $this->dispatchBrowserEvent('toast', ['type' => 'success', 'message' => 'Updated Post Successfully!']);
            return;
        }
        $this->dispatchBrowserEvent('toast', ['type' => 'error', 'message' => 'Failed to update Post!']);
    }

    public function destroy($id) {
        $post = Post::find($id);
        $this->authorize('delete', $post);
        $post->delete();
    }
}
