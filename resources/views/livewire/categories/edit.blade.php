<x-show-modal id="kt_modal_2" title="Edit Category" request="update" submit="Save Change">
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <input hidden wire:model="selected_id">
        <x-normal-input label="Name" name="name" placeholder="Enter Name" />
    </div>
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <x-textarea label="Description" name="description" placeholder="Enter Description....." />
    </div>
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <x-image-input label="Image" name="image" :image="$image"
                       :background="$this->forEditImage !== null ? $this->forEditImage : '/images/placeholder.png'" />
    </div>
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <x-status-input label="Status" name="status" />
    </div>
</x-show-modal>
