<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if ($message = Session::get('failed'))
<script>

    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ $message }}',
    })
</script>
@endif

@if ($message = Session::get('success'))
<script>
        Swal.fire({
        icon: 'success',
        title: 'Success...',
        text: '{{ $message }}',
    })
</script>
@endif
{{--
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'success',
        title: 'Signed in successfully'
      })
</script> --}}
{{--
<script>
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
        Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        )
    }
    })
</script> --}}
