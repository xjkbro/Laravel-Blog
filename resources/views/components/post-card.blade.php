@props(['post'])

<article {{ $attributes->merge(['class' => 'm-2 pb-4 hover:bg-neutral-100 p-4 rounded-xl']) }}>
    <a href="/posts/{{ $post->slug }}"><img class="rounded-xl mb-2" src="/images/illustration-1.png"
            alt="Illustration 1"></a>
    <h1 class="text-3xl font-bold inline">
        <a class="text-orange-500 hover:text-orange-600" href="/categories/{{ $post->category->slug }}">
            {{ $post->category->name }}
        </a>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h1>

    <div class="flex gap-1 items-center mb-2">
        <small class="text-gray-500">{{ 'Published on ' . $post->created_at->diffForHumans() }} by
            <a class="hover:underline" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
        </small>
    </div>
    <p class="italic mb-4 ">{{ $post->excerpt }}</p>
    <a href="/posts/{{ $post->slug }}"
        class="text-xs hover:border-b p-1 hover:text-black text-gray-500 transition-all">Read
        More →</a>
</article>
