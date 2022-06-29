<?php

namespace App\Http\Livewire\Roles;

use App\Models\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Roles extends Component
{
    use WithFileUploads;
    use WithPagination;
    use AuthorizesRequests;

    protected $paginationTheme = 'bootstrap';
    public $name, $selected_id;
    public $abilities = [];

    public function render()
    {
        $this->authorize('view-any', Role::class);
        return view('livewire.roles.roles', [
            'roles' => Role::paginate(5),
        ]);
    }

    public function resetInputs()
    {
        $this->name = null;
        $this->abilities = [];
    }

    public function store()
    {
        $this->authorize('create', Role::class);
        $this->validate([
            'name' => 'required|string|max:255',
            'abilities' => 'required|array'
        ]);
        $role = Role::create($this->all());
        if ($role) {
            $this->resetInputs();
            $this->dispatchBrowserEvent('toast', ['type' => 'success', 'message' => 'Created Role Successfully!']);
            return;
        }
        $this->dispatchBrowserEvent('toast', ['type' => 'error', 'message' => 'Failed to create Role!']);
    }

public function edit($id)
    {
        $role = Role::find($id);
        $this->authorize('update', $role);
        $this->name = $role->name;
        $this->abilities = $role->abilities;
        $this->selected_id = $id;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255|min:3|unique:roles,name,' . $this->selected_id,
            'abilities' => 'required|array'
        ]);
        $role = Role::find($this->selected_id);
        $this->authorize('update', $role);
        $role->update($this->all());
        if ($role) {
            $this->resetInputs();
            $this->dispatchBrowserEvent('toast', ['type' => 'success', 'message' => 'Updated Role Successfully!']);
            return;
        }
        $this->dispatchBrowserEvent('toast', ['type' => 'error', 'message' => 'Failed to update Role!']);
    }

    public function delete($id)
    {
        $role = Role::find($id);
        $this->authorize('delete', $role);
        $role->delete();
    }
}
