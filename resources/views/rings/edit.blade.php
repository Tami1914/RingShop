<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/editStyles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ring Shop</title>
</head>
<body>

    <div class="header-container">
        <h1>Rings Shop</h1>
    </div>

    <div class="header-options-container">
        <a href="/" class="options">Go to Home</a>
        <a href="/rings" class="options">Go to Ring List</a>
    </div>

    <div class="header-title-container">
        <h1>Edit your Rings</h1>
    </div>
    

    <div class="form-container">
        <form method="POST" action="{{ route('rings.update', $ring) }}" class="form">
            @csrf @method('PATCH') 
            <div class="form-group">
                <label for="diameter">Diameter</label>
                <input type="text" name="diameter" class="form-control" id="diameter" placeholder="Enter ring diameter" value="{{ old('diameter', $ring->diameter) }}">
            </div>
            <div class="form-group">
                <label for="material">Material</label>
                <input type="text" name="material" class="form-control" id="material" placeholder="Enter ring material" value="{{ old('material', $ring->material) }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>
