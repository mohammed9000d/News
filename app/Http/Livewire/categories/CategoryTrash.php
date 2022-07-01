<?php

namespace App\Http\Livewire\categories;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;
use function view;

class CategoryTrash extends Component
{
    use WithPagination;
    use AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $this->authorize('view-trash', Category::class);
        $categories = Category::onlyTrashed()->paginate(5);
        return view('livewire.categories.category-trash', ['categories' => $categories]);
    }

    public function restore($id = null)
    {
        if ($id) {
            $category = Category::onlyTrashed()->find($id);
            $this->authorize('restore', $category);
            $category->restore();
            $this->dispatchBrowserEvent('toast', ['type' => 'success', 'message' => 'Restored Category Successfully!']);
            return;
        }
        $categories = Category::onlyTrashed();
        $this->authorize('restore', $categories);
        $categories->restore();
        $this->dispatchBrowserEvent('toast', ['type' => 'success', 'message' => 'Restored All Categories Successfully!']);
    }

    public function force_delete($id = null)
    {
        if ($id != null) {
            $category = Category::onlyTrashed()->find($id);
            $this->authorize('force-delete', $category);
            $category->forceDelete();
            return;
        }
        $categories = Category::onlyTrashed();
        $this->authorize('empty-trash', $categories);
        $categories->forceDelete();
    }
}
