<!DOCTYPE html>
<html>
<head>
    <title>Galeri</title>
</head>
<body>

    <h1>Galeri Foto</h1>

    @foreach ($posts as $post)
        <div style="border:1px solid #000; margin:10px; padding:10px;">
            <h3>{{ $post->caption }}</h3>
            <p>{{ $post->description }}</p>

            @if ($post->image)
                <img src="{{ $post->image }}" width="200">
            @endif
        </div>
    @endforeach

</body>
</html>