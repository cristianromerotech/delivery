@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4">
     
        <form action="{{ route('delivery-update', ['id' => $deliveries -> id]) }}" method="POST">
            @method('PATCH')

            @csrf
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            @error('title')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="title" class="form-label">Origin direction</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$deliveries->origin}}">
           
                <label for="title" class="form-label">Destination direction</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$deliveries->destination}}">
       
                <label for="title" class="form-label">Money</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$deliveries->money}}">
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection
