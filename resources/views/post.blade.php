<x-layout :posts="$posts" :title="$post->title">
    <section class="w-3/4">
        <a class="mb-8" href="/"> ← Go back</a>
        <article class="mt-8">
            <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
            <p class="mb-2 text-xs text-gray-500">{{ 'Published on ' . date('M d, Y', $post->date) }}</p>
            <div class="mb-3 italic font-light">{{ $post->excerpt }}</div>
            <div class="prose">{!! $post->body !!}</div>
        </article>
    </section>
</x-layout>
