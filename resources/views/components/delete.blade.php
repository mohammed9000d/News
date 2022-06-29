<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {

        @this.on('triggerDelete', id => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#0095e8',
                cancelButtonColor: '#f1416c',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                //if user clicks on delete
                if (result.value) {
                    // calling destroy method to delete
                    @this.call('destroy',id)
                    // success response
                    Swal.fire({
                        title: 'Deleted',
                        text: 'Deleted successfully!',
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
                        text: 'Deletion failed, try again later',
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
