<x-show-modal tabindex="-1" request="store" id="kt_modal_1" title="New Post">
    <div class="fv-row mb-7 fv-plugins-icon-container">
                <label class="required fw-bold fs-6 mb-2">Name</label>
                <input wire:model="name" type="text" name="name"
                       class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror"
                       placeholder="Name">
                <div class="fv-plugins-message-container invalid-feedback"></div>
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    <div class="fv-row mb-7 fv-plugins-icon-container">
                <label class="required fw-bold fs-6 mb-2">Category Name</label>
                <select wire:model="category_id" name="category_id"
                        class="form-control form-select form-select-solid" name="option">
                    <option value="" style="color: #B5B5C3">-- Select --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id0') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    <div class="fv-row mb-7 fv-plugins-icon-container">
                <label class="required fw-bold fs-6 mb-2">Short Description</label>
                <textarea wire:model="short_description" type="text" name="short_description"
                          class="form-control form-control-solid mb-3 mb-lg-0 @error('short_description') is-invalid @enderror"
                          placeholder="Short Description...."></textarea>
                <div class="fv-plugins-message-container invalid-feedback"></div>
                @error('short_description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    <div class="fv-row mb-7 fv-plugins-icon-container">
                <label class="required fw-bold fs-6 mb-2">Full Description</label>
                <textarea wire:model="full_description" type="text" name="full_description"
                          class="form-control form-control-solid mb-3 mb-lg-0 @error('full_description') is-invalid @enderror"
                          placeholder="Full Description...."></textarea>
                <div class="fv-plugins-message-container invalid-feedback"></div>
                @error('full_description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    <div class="fv-row mb-7 fv-plugins-icon-container">
                <label class="required fw-bold fs-6 mb-2 d-block">Image</label>
                <div class="image-input image-input-empty" data-kt-image-input="true"
                     style="background-image: url({{ '/images/placeholder.png' }})">
                    <!--begin::Image preview wrapper-->
                    <div id="image_change" class="image-input-wrapper w-125px h-125px" @if($image != null) style="background-image: url({{ $image->temporaryUrl() }})" @endif ></div>
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
                        <input wire:model="image" type="file" name="avatar" accept=".png, .jpg, .jpeg"/>
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
                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    <div class="fv-row mb-7 fv-plugins-icon-container">
                <label class="required fw-bold fs-6 mb-2"> Status</label>
                <div class="form-check form-switch form-check-custom form-check-solid">
                    <input type="checkbox" wire:model="status" name="status" class="form-check-input w-50px" value="" id="flexSwitchChecked" checked />
                </div>
                @error('status') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
</x-show-modal>

