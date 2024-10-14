<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ring Shop</title>
</head>
<body>
    <h1>Edit Form</h1>

    <form method="POST" action="{{ route('rings.update', $ring) }}">
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

</body>
</html>
