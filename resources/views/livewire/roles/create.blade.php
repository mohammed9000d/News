<x-show-modal id="kt_modal_1" title="New Role" request="store">
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <x-normal-input label="Name" name="name" placeholder="Role Name" />
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
