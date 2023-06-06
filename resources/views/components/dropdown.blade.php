
@props(['name', 'style' => 'relative px-3 py-2 flex lg:inline-flex items-center justify-between bg-gray-100 rounded-xl font-semibold text-sm w-32']) 


<div class="relative inline-block">
    {{-- triger --}}
    <label for="{{ explode(" ", $name)[0] }}" class="{{ $style }}" > <span class="inline-block">{{ $name }}</span>
        
        <x-icon name='arrow-down' class="pointer-events-none" style="right: 12px;"></x-icon>
        
    </label>
    <input type="checkbox" name="dropDown" id="{{ explode(" ", $name)[0] }}" class="drop-down-btn hidden">

    {{-- links --}}
    <div class="drop-down-menu absolute bg-gray-100 rounded-md text-sm py-1 w-full overflow-auto max-h-52">
     <script>
        document.addEventListener('click', function(event) {
            const checkbox = document.getElementById('{{ explode(" ", $name)[0] }}');
            const target = event.target;

            if (target !== checkbox && !checkbox.contains(target)) {
               
                checkbox.checked = false;
               
            }
        });
     </script>   
        
       {{ $slot }}
        
    </div>

</div>