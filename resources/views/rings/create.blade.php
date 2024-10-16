@extends('layout')

@section('content')
<link rel="stylesheet" href="/css/createStyles.css">

    <div class="header-options-container">
        <a href="/" class="options">Go to Home</a>
        <a href="/rings" class="options">Go to Ring List</a>
    </div>

    <div class="header-title-container">
        <h1>Create a new Ring</h1>
    </div>

    <div class="form-container">
            <form method="POST" action="{{ route('rings.store') }}" class="form">
                @csrf
                <div class="form-group">
                    <label for="diameter">Diameter</label>
                    <input type="text" name="diameter" class="form-control" id="diameter" placeholder="Enter ring diameter">
                </div>
                <div class="form-group">
                    <label for="material">Material</label>
                    <input type="text" name="material" class="form-control" id="material" placeholder="Enter ring material">
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
    </div>

@endsection
