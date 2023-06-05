@php
    $post = [
        'slug' => 'hoiehfoihefioheofihe--8-',
    ]
    
@endphp

<x-layout>
    <x-panel class="mt-5 max-w-sm mx-auto" >

        <h1 class="text-xl font-bold text-center">Create your post here!</h1>

        <form method="POST" action="/admin/posts" enctype="multipart/form-data" class="space-y-5">
            @csrf
            
            <div>
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="title"
                >Title</label>
                <input class="border border-gray-400 p-2 w-full"
                    name="title" 
                    value="{{ old('title') }}"                    
                    required
                />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>
            
            <div>
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="slug"
                >slug</label>
                <input class="border border-gray-400 p-2 w-full"
                    name="slug" 
                    value="{{ old('slug') }}"                    
                    required
                />

                @error('slug')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div>
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="thumbnail"
                >thumbnail</label>
                <input class="border border-gray-400 p-2 w-full"
                    name="thumbnail"
                    id="thumbnail"
                    type="file"
                    required 
                />

                @error('thumbnail')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div>
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="excerpt"
                >excerpt</label>
                <textarea class="border border-gray-400 p-2 w-full"
                    name="excerpt" 
                    rows="2"
                    required
                >{{ old('excerpt') }}</textarea>

                @error('excerpt')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>
            <div>
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="body"
                >Body</label>
                <textarea class="border border-gray-400 p-2 w-full"
                    name="body" 
                    rows="4"
                    required
                >{{ old('body') }}</textarea>

                @error('body')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div>
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="category_id"
                >
                    Category
                </label>
                <select class="border border-gray-400 p-2 w-full"
                    name="category_id"
                    id="category" 
                    required
                >
                    
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" {{ old('category_id' == $category->id? 'selected' : '') }}>{{ ucwords($category->name) }}</option>
                    @endforeach
                    
                </select>

                @error('category')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>
            
            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 mt-4">Post</button>
            </div>

                                
        </form>
    </x-panel>
     
</x-layout>
    
