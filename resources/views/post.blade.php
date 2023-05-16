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
    <main class="mx-auto w-3/4 flex gap-8 mt-12">
        <aside class="w-1/4">
            <h4 class="mb-2 text-sm font-bold text-gray-600">Latest Articles</h4>
            <ul class="space-y-2">
                @foreach($posts as $p)
                <li class="border border-slate-100 hover:bg-slate-100 transition-color rounded-lg w-full"><a class="w-full h-full block p-2" href="/posts/{{$p->slug}}">{{$p->title}}</a></li>
                @endforeach
            </ul>
        </aside>
        <section class="w-3/4">
            <a class="mb-8" href="/"> ← Go back</a>
            <article class="mt-8">
                <h1 class="text-3xl font-bold">{{$post->title}}</h1>
                <p class="mb-2 text-xs text-gray-500">{{"Published on ".date('M d, Y', $post->date)}}</p>
                <div class="mb-3 italic font-light">{{$post->excerpt}}</div>
                <div class="prose">{!!$post->body!!}</div>
            </article>
        </section>
    </main>
</body>

</html>
