@extends('app')

@section('content')
    <div class="container border p-4 mt-4" style="width: 500px; background-color: rgba(0, 128, 255, 0.21)">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @elseif (session('error'))
        
            <h6 class="alert alert-danger">{{ session('error') }}</h6>

            @endif
                
            <div class="mb-3">
                {{-- <div id="emailHelp" class="form-text">Write the todo that you want</div> --}}
                <label for="title" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
                <label for="title" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password">
                <label for="title" class="form-label">Role</label>
                <input type="text" class="form-control" id="role" name="role">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
     
    </div>
@endsection
