<x-layout :posts="$posts" title="Home">
    <section class="w-3/4">
        @foreach ($posts as $post)
            <article class="my-12 pb-12 border-b border-gray-200">
                <h1 class="text-3xl font-bold"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
                <small class="text-gray-500">{{ 'Published on ' . date('M d, Y', $post->date) }}</small>
                <p class="italic ">{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </section>
</x-layout>
