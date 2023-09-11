@props(['posts' => $posts])
<aside class="w-1/4">
    <h4 class="mb-2 text-sm font-bold text-gray-600">Latest Articles</h4>
    <ul class="space-y-2">
        @foreach ($posts as $post)
            @if ($loop->index < 4)
                <li class="border border-slate-100 hover:bg-slate-100 transition-colors rounded-lg w-full">
                    <a class="w-full h-full block p-4 pb-2" href="/posts/{{ $post->slug }}">{{ $post->title }}
                        <p class="text-xs italic p-1 pt-2 text-gray-500">{{ substr($post->excerpt, 0, 56) }}...</p>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</aside>
