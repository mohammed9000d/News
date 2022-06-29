<label class="required fw-bold fs-6 mb-2 d-block">{{ $label }}</label>
<div class="image-input image-input-empty" data-kt-image-input="true"
     style="background-image: url({{ $background ?? '/images/placeholder.png' }})">
    <!--begin::Image preview wrapper-->
    <div id="image_change" class="image-input-wrapper w-125px h-125px" @if($image != null) style="background-image: url({{ $image->temporaryUrl() }})"@endif ></div>
    <!--end::Image preview wrapper-->

    <!--begin::Edit button-->
    <label
        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
        data-kt-image-input-action="change"
        data-bs-toggle="tooltip"
        data-bs-dismiss="click"
        title="Change avatar">
        <i class="bi bi-pencil-fill fs-7"></i>

        <!--begin::Inputs-->
        <input wire:model="{{ $name }}" type="file" name="avatar" accept=".png, .jpg, .jpeg"/>
        <input type="hidden" name="avatar_remove"/>
        <!--end::Inputs-->
    </label>
    <!--end::Edit button-->

    <!--begin::Cancel button-->
    <span
        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
        data-kt-image-input-action="cancel"
        data-bs-toggle="tooltip"
        data-bs-dismiss="click"
        title="Cancel avatar">
        <i class="bi bi-x fs-2"></i>
    </span>
    <!--end::Cancel button-->

    <!--begin::Remove button-->
    <span
        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
        data-kt-image-input-action="remove"
        data-bs-toggle="tooltip"
        data-bs-dismiss="click"
        title="Remove avatar">
        <i class="bi bi-x fs-2"></i>
    </span>
    <!--end::Remove button-->
</div>
<!--end::Image input-->
@error($name) <span class="text-danger">{{ $message }}</span> @enderror
