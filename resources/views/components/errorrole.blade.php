@if(session('error'))
    <div class="alert alert-danger text-center text-red-600">
        {{ session('error') }}
    </div>
@endif