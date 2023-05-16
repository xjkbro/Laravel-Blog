<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    @vite('resources/css/app.css')

</head>

<body>
    <main class="mx-auto w-1/2">
        @foreach ($posts as $post)
        <article class="my-12 pb-12 border-b border-gray-200">
            <h1 class="text-3xl font-bold"><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h1>
            <small class="text-gray-500">{{"Published on ".date('M d, Y', $post->date)}}</small>
            <p class="italic ">{{$post->excerpt}}</p>
        </article>
         @endforeach
    </main>
</body>

</html>
