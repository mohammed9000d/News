<label class="required fw-bold fs-6 mb-2">{{ $label }}</label>
<input wire:model="{{ $name }}" type="{{ $type ?? 'text' }}" name="{{ $name }}" placeholder="{{ $placeholder ?? '' }}"
       class="form-control form-control-solid mb-3 mb-lg-0 @error($name) is-invalid @enderror">
<div class="fv-plugins-message-container invalid-feedback"></div>
@error($name) <span class="text-danger">{{ $message }}</span> @enderror
