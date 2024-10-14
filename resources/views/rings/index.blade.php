<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rings</title>
</head>

<body>
    <h1>Rings List</h1>
    <ul>
        @foreach ($rings as $ring)
            <li>{{ $ring->diameter }} {{ $ring->material }}</li>
            <a href="{{ route('rings.edit', $ring) }}">Edit</a>
            <form action="{{route('rings.destroy', $ring)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endforeach
    </ul>
    <a href="{{route('rings.create')}}">Back to create</a>
</body>

</html>