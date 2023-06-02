


<x-dropdown :currentCategory="$currentCategory">
                
    <x-dropdown-item 
    href="/?{{ http_build_query(request()->except('category', 'page')) }}"
    :active='request("category")===null '
    >
        All
    </x-dropdown-item>

    @foreach ($categories as $category )
        
    <x-dropdown-item 
        href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}" 
        :active='request("category")===$category->slug'
    > {{ ucwords($category->name) }} </x-dropdaown-item>

    @endforeach
</x-dropdown>