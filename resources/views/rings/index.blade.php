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
        @foreach ($rings as $ring)
            <li>{{ $ring->diameter }} {{ $ring->material }}</li>
            <a href="{{ route('rings.edit', $ring) }}">Edit</a>
            <form action="{{route('rings.destroy', $ring)}}" method="POST" class="form">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endforeach
    </ul>
</body>

</html>