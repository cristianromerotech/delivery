@extends('app')

@section('content')
    <div class="container border p-4 mt-4" style="width: 500px; background-color: rgba(0, 128, 255, 0.21)">
        <form action="{{ route('delivery') }}" method="POST">
            @csrf
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            @error('title')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                {{-- <div id="emailHelp" class="form-text">Write the todo that you want</div> --}}
                <label for="title" class="form-label">Welcome to driver page!</label>
               
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div>
            @foreach ($deliveries as $delivery)
                <div class="row py-1">
                    <div class="col-md-9 d-flex align-items-center">
                        <a href="{{ route('delivery-edit', ['id' => $delivery->id]) }}">Origin: {{ $delivery->origin }} &nbsp; Destination: {{$delivery->destination }}</a>
                       
                    </div>

                    <div class="col-md-3 d-flex justify-content-end">
                        <form action="{{ route('delivery-destroy', ['id' => $delivery->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
