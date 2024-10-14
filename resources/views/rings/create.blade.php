@extends('layout')

@section('content')
    <h1>Create a new Ring</h1>
    <form method="POST" action="{{ route('rings.store') }}">
        @csrf
        <div class="form-group">
            <label for="diameter">Diameter</label>
            <input type="text" name="diameter" class="form-control" id="diameter" placeholder="Enter ring diameter">
        </div>
        <div class="form-group">
            <label for="material">Material</label>
            <input type="text" name="material" class="form-control" id="material" placeholder="Enter ring material">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ route('rings.index') }}">Back to the list</a>
@endsection
