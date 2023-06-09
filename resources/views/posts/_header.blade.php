
@php

    use App\Models\Category;    
    $currentCategory = Category::where('slug', request('category'))->first();

@endphp

<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">{{ $currentCategory->name ?? "Laravel From Scratch"; }}</span> News
              
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
      
            <x-category-dropdown />

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">

                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <input type="text" name="search" placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{{ request('search') }}">
            </form>
        </div>
    </div>
</header>