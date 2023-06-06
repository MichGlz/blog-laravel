

<x-layout>
    <x-setting heading="Manage Posts" >    
        <table class="min-w-full border border-gray-300">
           <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap border-b">
                            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap border-b text-sm">
                            <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500">Edit</a>
                        </td>
                        
                        <td class="px-6 py-4 whitespace-nowrap border-b text-sm">
                            <form method="POST" action="/admin/posts/{{ $post->id }}" >
                                @csrf
                                @method('DELETE')
                                <button class="text-gray-300 text-sm hover:text-red-300">Delete</button>
                            </form>
                        </td>    
                    </tr>
                @endforeach    
            </tbody>
        </table>
        
    </x-setting>    
</x-layout>
    
