<x-show-modal id="kt_modal_2" title="Edit Role" request="update" submit="Save Change">
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <input hidden wire:model="selected_id">
        <x-normal-input label="Name" name="name" placeholder="Enter Name" />
    </div>

    <div class="fv-row mb-7 fv-plugins-icon-container">
        @foreach(config('abilities') as $key => $value)
            <div class="custom-control custom-checkbox">
                <input wire:model="abilities" type="checkbox" class="custom-control-input" id="{{ $key }}" name="abilities[]" value="{{ $key }}">
                <label class="custom-control-label" for="{{ $key }}">{{ $value }}</label>
            </div>
        @endforeach
    </div>
</x-show-modal>
