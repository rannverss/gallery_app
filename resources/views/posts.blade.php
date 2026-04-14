<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        body { font-family: 'Instrument Sans', sans-serif; margin: 0; padding: 2rem; background: #FDFDFC; color: #1b1b18; }
        h1 { margin-bottom: 1.5rem; }
        .posts { display: grid; gap: 1rem; }
        .post { padding: 1rem; border: 1px solid #e3e3e0; border-radius: 0.5rem; background: #fff; }
        .post h2 { margin: 0 0 0.5rem; font-size: 1.125rem; }
        .post p { margin: 0; color: #706f6c; font-size: 0.875rem; }
        .empty { color: #706f6c; }
    </style>
</head>
<body>
    <h1>Posts</h1>

    @if($posts->count())
        <div class="posts">
            @foreach($posts as $post)
                <div class="post">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p class="empty">No posts yet.</p>
    @endif
</body>
</html>
