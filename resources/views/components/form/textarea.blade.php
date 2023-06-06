@props(['name', 'row' => 2])

<x-form.field>
    
    <x-form.label  name="{{ $name }}" />

    <textarea class="border border-gray-200 rounded p-2 w-full"
        name="{{ $name }}" 
        id="{{ $name }}"
        rows="{{ $row }}"
        required
    >{{ old($name) }}</textarea>
    
    <x-form.error name="{{ $name }}" />

</x-form.field>
   