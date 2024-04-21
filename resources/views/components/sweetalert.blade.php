@if (session()->has('message'))
@stack('scripts')
<script>
    Swal.fire({
        title: '{{ session('operationSuccessful') ? 'Success' : 'Error' }}!',
        icon: '{{ session('operationSuccessful') ? 'success' : 'error' }}',
        confirmButtonText: 'Ok',
        html: '{{ session('message') }}'
    })
</script>
@endif