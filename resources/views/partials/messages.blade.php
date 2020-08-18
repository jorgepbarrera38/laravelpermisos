@if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li class="">{{ $error }}</li>
        @endforeach
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif