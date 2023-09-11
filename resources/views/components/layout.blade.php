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
                <span class="font-bold text-5xl">blgger.io</span>
            </a>
            <ul class="flex gap-8 font-semibold">
                <li>Articles</li>
                <li>Pricing</li>
                <li>Contribute</li>
                <li>Account</li>
            </ul>
        </nav>
    </header>
    {{ $slot }}
    <footer class="h-72 flex items-center bg-slate-200">
        <div class="grid grid-cols-3 w-5/6 mx-auto">
            {{-- <img src="strong arms.png" class="w-24" alt=""> --}}
            <ul>
                <li>Test 1</li>
                <li>Test 2</li>
                <li>Test 3</li>
            </ul>
            <ul>
                <li>Test 1</li>
                <li>Test 2</li>
                <li>Test 3</li>
            </ul>
        </div>

    </footer>
</body>

</html>
