<x-show-modal id="kt_modal_1" title="New Category" request="store">
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <x-normal-input label="Name" name="name" placeholder="Enter Name" />
    </div>
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <x-textarea label="Description" name="description" placeholder="Enter Description....." />
    </div>
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <x-image-input label="Image" name="image" :image="$image" />
    </div>
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <x-status-input label="Status" name="status" />
    </div>
</x-show-modal>
