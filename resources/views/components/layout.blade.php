

<!doctype html>

<title>Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/app.css">
<style>
    html{
        scroll-behavior: smooth;
    }
</style>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
           
            @auth
                <x-dropdown name="Welcome, {{ auth()->user()->name }}!" style="text-xs font-bold uppercase flex items-center">    
                @admin 
                    <x-dropdown-item 
                    href="/admin/posts"
                    :active="request()->is('admin/posts')" 
                    >Dashboard</x-dropdown-item >

                    <x-dropdown-item 
                    href="/admin/posts/create"
                    :active="request()->is('admin/posts/create')" 
                    >New Post</x-dropdown-item >
                @endadmin
                   
                    <x-dropdown-item 
                        href="/"
                        :active="request()->is('/')" 
                        >
                        home
                    </x-dropdown-item >

                    <form method="POST" action="/logout">
                        @csrf
    
                        <button class="block w-full px-2 text-left hover:bg-gray-300 focus:bg-gray-300" type="submit">Log out</button>
    
                    </form>
                    
                </x-dropdown>    
                

            @else
                
                <a href="{{ (request()->path() !== 'register') ? '/register' : '/'; }}" class="text-xs font-bold uppercase">{{ (request()->path() !== 'register') ? 'Register' : 'Home' }}</a>
                <a href="{{ (request()->path() !== 'login') ? '/login' : '/'; }}" class="ml-6 text-xs font-bold uppercase">{{ (request()->path() !== 'login') ? 'log in' : 'Home' }}</a>
                
            
            @endauth
                
                

                <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

            {{ $slot }}

        <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16 relative">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf

                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <div>
                            <input id="email" type="text" name="email" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                             @error('email')
                                 <span class="text-xs text-red-500 block">{{ $message }}</span>
                             @enderror  
                            </div>    
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            <a href="#" class="absolute top-3 left-3 transition-colors duration-300 bg-blue-500 hover:bg-blue-600 rounded-full py-1 px-1"><span class="block w-6 h-6"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 19V5M5 12l7-7 7 7" />
              </svg>
              </span></a>
        </footer>

    </section>
    @if (session()->has('success'))
    <div class="fixed bottom-3 right-3 bg-blue-400 text-white px-4 py-2 border rounded-xl" id="flash">
        <p>{{ session('success') }}</p>
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('flash').remove();
        }, 4000);
    </script>
@endif

    
</body>

