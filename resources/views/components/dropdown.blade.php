
@props(['currentCategory']) 


<div class="relative inline-block">
    {{-- triger --}}
    <label for="dropDown" class="relative px-3 py-2 flex lg:inline-flex items-center justify-between bg-gray-100 rounded-xl font-semibold text-sm w-32" > <span class="inline-block">{{ isset($currentCategory->name) ? ucwords( $currentCategory->name) :  'Category' }}</span>
        
        <x-icon name='arrow-down' class="pointer-events-none" style="right: 12px;"></x-icon>
        
    </label>
    <input type="checkbox" name="dropDown" id="dropDown" class="drop-down-btn hidden">

    {{-- links --}}
    <div class="drop-down-menu absolute bg-gray-100 rounded-md text-sm py-1 w-full overflow-auto max-h-52">
        
       {{ $slot }}
        
    </div>

</div>