<x-layout :posts="$posts" title="Home">
    @if (request()->routeIs('home'))
        @include('components.hero')
    @endif
    @include('components.filter')
    <main class="mx-auto w-3/4 flex gap-8 mt-12 min-h-screen">
        @if ($posts->count() > 0)
            <section class="grid grid-cols-6 gap-4 mb-12">
                @foreach ($posts as $post)
                    @if ($loop->iteration < 5)
                        <x-post-card :post="$post" class="col-span-3" />
                    @else
                        <x-post-card :post="$post" class="col-span-2" />
                    @endif
                @endforeach
            </section>
        @else
            <p class="text-2xl font-bold text-center">No posts found.</p>
        @endif
    </main>
</x-layout>
