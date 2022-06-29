<label class="required fw-bold fs-6 mb-2">{{ $label }}</label>
<div class="form-check form-switch form-check-custom form-check-solid">
    <input type="checkbox" wire:model="{{ $name }}" name="{{ $name }}" class="form-check-input w-50px" value="" id="{{$id ?? 'flexSwitchChecked'}}" checked />
</div>
@error($name) <span class="text-danger">{{ $message }}</span> @enderror
