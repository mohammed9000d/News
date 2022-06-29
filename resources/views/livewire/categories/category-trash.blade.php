<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                      height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                      fill="currentColor"></rect>
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-user-table-filter="search"
                               class="form-control form-control-solid w-250px ps-14" placeholder="Search user">
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <!--begin::Export-->
                        @can('restore', App\Models\Category::class)
                        <button wire:click="restore" type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                           data-bs-target="#kt_modal_export_users"{{ $categories->total() == 0 ? 'disabled' : '' }}>
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2"
                                          rx="1" transform="rotate(90 12.75 4.25)"
                                          fill="currentColor"></rect>
                                    <path
                                        d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                        fill="#C4C4C4"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            Restore All
                        </button>
                        @endcan
                        @can('forceDelete', App\Models\Category::class)
                            <button wire:click="$emit('emptyTrash')" type="button" class="btn btn-light-danger"{{ $categories->total() == 0 ? 'disabled' : '' }}>
                                <i class="bi bi-trash"></i>
                                Empty Trash
                            </button>
                        @endcan
                    </div>
                    <div class="d-flex justify-content-end align-items-center d-none"
                         data-kt-user-table-toolbar="selected">
                        <div class="fw-bolder me-5">
                            <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                        </div>
                        <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete
                            Selected
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body py-4">
                <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
                            <thead>
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-50px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                    colspan="1" aria-label="Role: activate to sort column ascending"
                                    style="width: 50px;">Image
                                </th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                    colspan="1" aria-label="Role: activate to sort column ascending"
                                    style="width: 126.109px;">Name
                                </th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                    colspan="1" aria-label="Two-step: activate to sort column ascending"
                                    style="width: 126.109px;">status
                                </th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                    colspan="1" aria-label="Last login: activate to sort column ascending"
                                    style="width: 126.109px;">Deleted At
                                </th>
                                <th class="text-end min-w-200px sorting_disabled" rowspan="1" colspan="1"
                                    aria-label="Actions" style="width: 242px;">Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($categories->total() == 0)
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <h5 class="text-muted mt-5">Trash Is Empty!</h5>
                                    </td>
                                </tr>
                            @endif
                            @foreach($categories as $category)
                                <tr class="odd">
                                    <td>
                                        <img src="{{ $category->image_url }}" alt="{{ $category->name }}" width="70" height="50" style="object-fit: cover">
                                    </td>
                                    {{--                                    <td>{{ $loop->iteration }}</td>--}}
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->status}}</td>
                                    <td>{{$category->deleted_at}}</td>
                                    <td class="text-end">
                                        @can('restore', $category)
                                        <button wire:click="restore({{$category->id}})" type="button" class="btn btn-primary active" data-bs-toggle="modal" data-bs-target="#kt_modal_2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                            Restore
                                        </button>
                                        @endcan
                                        @can('forceDelete', $category)
                                        <button wire:click="$emit('triggerDelete',{{ $category->id }})" type="button" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"></path>
                                            </svg>
                                            Delete Forever
                                        </button>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <div class="py-5{{ $categories->total() == 0 ? 'd-none' : '' }}">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>

<!--end::Entry-->

@push('CategoryScripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {

            @this.on('triggerDelete', id => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this forever!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#0095e8',
                    cancelButtonColor: '#f1416c',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    //if user clicks on delete
                    if (result.value) {
                        // calling destroy method to delete
                        @this.call('force_delete',id)
                        // success response
                        Swal.fire({
                            title: 'Deleted',
                            text: 'Category Deleted Successfully!',
                            icon: 'success',
                            showConfirmButton:false,
                            timer: 2000,
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                            }
                        })

                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: 'City Not Deleted!',
                            icon: 'error',
                            showConfirmButton:false,
                            timer: 2000,
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                            }
                        })
                    }
                });
            });
        })
    </script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {

            @this.on('emptyTrash', id => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this forever!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#0095e8',
                    cancelButtonColor: '#f1416c',
                    confirmButtonText: 'Yes, empty trash!'
                }).then((result) => {
                    //if user clicks on delete
                    if (result.value) {
                        // calling destroy method to delete
                        @this.call('force_delete')
                        // success response
                        Swal.fire({
                            title: 'Deleted',
                            text: 'Empty Trash Successfully!',
                            icon: 'success',
                            showConfirmButton:false,
                            timer: 2000,
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                            }
                        })

                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: 'City Not Deleted!',
                            icon: 'error',
                            showConfirmButton:false,
                            timer: 2000,
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                            }
                        })
                    }
                });
            });
        })
    </script>

@endpush
