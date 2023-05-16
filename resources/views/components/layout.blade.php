@props(['posts' => $posts, 'title' => $title])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - My Blog</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="h-24 bg-slate-200 shadow-sm">
        <nav class="w-5/6 mx-auto flex h-full items-center justify-between">
            <a href="/" class="flex gap-4 items-center">
                <img src="/strong arms.png" class="w-20 h-20" alt="">
                <span class="font-bold text-5xl">MaxReps</span>
            </a>
            <ul class="flex gap-4 ">
                <li>Menu 1</li>
                <li>Menu 2</li>
                <li>Menu 3</li>
                <li>Menu 4</li>
            </ul>
        </nav>
    </header>
    <main class="mx-auto w-3/4 flex gap-8 mt-12">
        <x-sidebar :posts="$posts" />
        {{ $slot }}
    </main>
</body>

</html>
