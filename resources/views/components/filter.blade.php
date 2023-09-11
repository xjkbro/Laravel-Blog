<section class="w-2/3 mx-auto my-24">
    <h2 class="text-4xl font-bold text-orange-400">{{ isset($currentCategory) ? $currentCategory->name : '' }}</h2>
    <div class="grid grid-cols-5 gap-4 my-2 items-center">
        <h3 class="text-xl font-semibold col-span-1 text-left">Search</h3>
        <form action="#" method="GET" class="col-span-4">
            <input type="text" name="search" class="w-full outline outline-neutral-400 rounded-full p-2 pl-4"
                value="{{ request('search') }}">

        </form>
    </div>
    <div class="grid grid-cols-5 gap-4 my-2">
        <h3 class="text-xl font-semibold col-span-1 text-left">Filter by Category</h3>
        <div class="col-span-4 text-left">
            @foreach ($categories as $category)
                <a href="/categories/{{ $category->slug }}"
                    class="px-4 py-1 text-sm text-white rounded-full {{ isset($currentCategory) && $currentCategory->slug == $category->slug ? 'bg-orange-700' : 'bg-orange-500' }}">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
</section>
