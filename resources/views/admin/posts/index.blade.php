

<x-layout>
    <x-setting heading="Manage Posts" >    
        <table class="min-w-full border border-gray-300">
           <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap border-b"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></td>
                        <td class="px-6 py-4 whitespace-nowrap border-b"><span class="bg-green-300 text-gray-600 text-sm py-1 px-3 rounded-full">Posted</span></td>
                        <td class="px-6 py-4 whitespace-nowrap border-b text-sm"><a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 py-1 px-2">Edit</a></td>
                    </tr>
                @endforeach    
            </tbody>
        </table>
        
    </x-setting>    
</x-layout>
    
