
<x-layout>
    <x-panel class="max-w-lg mx-auto mt-20">
        <main>

            <h1 class="text-center font-bold text-xl">Log in!</h1>

            <form class="mt-10 space-y-6" method="POST" action="/login">

                @csrf

              
                <div>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                           for="email"
                    >

                        email

                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="email" 
                           name="email" 
                           id="email"
                           value="{{ old('email') }}"
                           required
                    >
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>


                <div>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                           for="password"
                    >

                        password

                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="password" 
                           name="password" 
                           id="password"
                           required
                    >

                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>
                
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">Log in</button>
                  </div>
                          
            </form>
        </main>
    </x-panel>
</x-layout>