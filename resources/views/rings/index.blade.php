<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/indexStyles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rings</title>
</head>

<body>

    <div class="header-container">
        <h1>Ring Shop</h1>
    </div>

    <div class="header-options-container">
        <a href="/" class="options">Go to Home</a>
        <a href="/rings/create" class="options">Go to Create Ring</a>
    </div>

    <div class="header-title-container">
        <h1>Ring List</h1>
    </div>

    <ul class="ring-list-container">
        <div class="form-container">
            @foreach ($rings as $ring)
                <div class="item-container">
                    <div>
                        <li class="item-list">Diameter:  {{ $ring->diameter }}</li><li class="item-list">Material:  {{ $ring->material }}</li>
                    </div>
                    <div class="item-edit-container">
                        <a class="item-edit" href="{{ route('rings.edit', $ring) }}">Edit</a>
                    </div>
                    <form action="{{route('rings.destroy', $ring)}}" method="POST" class="item-delete-container">
                         @csrf
                         @method('DELETE')
                            <button type="submit" class="item-delete">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </ul>
</body>

</html>