@auth
                    <x-panel class="mt-5" >
                        <form method="POST" action="/posts/{{ $post->slug }}/comments">
                            @csrf
                                                        
                            <div>
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                                    for="body"
                                >
            
                                    {{ auth()->user() ? auth()->user()->username . ", l" : "L"  }}eave your comment!
            
                                </label>
                                <textarea class="border border-gray-400 p-2 w-full"
                                    name="body" 
                                    rows="4"
                                    required
                                ></textarea>
            
                                @error('body')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
            
                            </div>
                            
                            <div>
                                <button type="submit" class="flex w-full justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 mt-4">Post</button>
                            </div>
                                    
                        </form>
                    </x-panel>
                    @else
                    <a href="/login" class="text-blue-400 underline font-bold mt-8 mb-8">Log in to leave a comment</a>
                    @endauth