<x-layout :posts="$posts" :title="$post->title">
    <main class="mx-auto w-3/4 flex gap-8 mt-12 min-h-screen">

        <x-sidebar :posts="$posts" />

        <section class="w-3/4">
            <a class="mb-8" href="/"> ← Go back</a>
            <article class="my-8">
                <img class="rounded-xl mb-2" src="/images/illustration-1.png" alt="Illustration 1">
                <h1 class="text-3xl font-bold inline">
                    <a class="text-orange-500 hover:text-orange-600" href="/categories/{{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                    {{ $post->title }}
                </h1>
                <p class="mb-2 text-xs text-gray-500">{{ 'Published on ' . $post->created_at->diffForHumans() }} by
                    <a class="hover:underline"
                        href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                </p>
                <div class="mb-3 italic font-light">{{ $post->excerpt }}</div>
                <hr class="mb-6">
                <div class="prose">{!! $post->body !!}</div>
            </article>
        </section>
    </main>
</x-layout>
