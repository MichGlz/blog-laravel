@php
    $post = [
        'slug' => 'hoiehfoihefioheofihe--8-',
    ]
    
@endphp

<x-layout>
    <x-panel class="mt-5 max-w-sm mx-auto" >

        <h1 class="text-xl font-bold text-center">Create your post here!</h1>

        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            
            <x-form.input name="title"/>

            <x-form.input name="slug"/>

            <x-form.input name="thumbnail" type="file"/>

            <x-form.textarea name="excerpt" />

            <x-form.textarea name="body" row="4"  />            
            
            <x-form.field>
                
                <x-form.label name="category"/>

                <select class="border border-gray-400 p-2 w-full"
                    name="category_id"
                    id="category" 
                    required
                >
                    
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" {{ old('category_id' == $category->id? 'selected' : '') }}>{{ ucwords($category->name) }}</option>
                    @endforeach
                    
                </select>

                <x-form.error name="category" />

            </x-form.field>
            
            <x-form.button> post </x-form.button>

                                
        </form>
    </x-panel>
     
</x-layout>
    
