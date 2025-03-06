{{-- <ul>
    <li>
        <a href="{{ route('home')}}">Home</a>
    </li>
    <li>
        <a href="{{ route('about')}}">About</a>
    </li>
    <li>
        <a href="{{ route('contact')}}">Contact</a>
    </li>
</ul> --}}


<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- โลโก้ -->
        <a href="{{ route('home') }}" class="text-xl font-bold">Laravel</a>

        <!-- เมนูปกติ (ซ่อนในมือถือ) -->
        <ul class="hidden md:flex space-x-6">
            <li><a href="{{ route('home') }}" class="hover:text-gray-300">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-gray-300">About</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-gray-300">Contact</a></li>
        </ul>

        <!-- ปุ่มเมนูในมือถือ -->
        <button id="menu-toggle" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- เมนูในมือถือ (ซ่อนตอนเริ่มต้น) -->
    <div id="mobile-menu" class="hidden md:hidden absolute left-0 top-14 w-full bg-gray-800 shadow-lg">
        <ul class="flex flex-col items-center space-y-4 py-4">
            <li><a href="{{ route('home') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Home</a></li>
            <li><a href="{{ route('about') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">About</a></li>
            <li><a href="{{ route('contact') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Contact</a></li>
        </ul>
    </div>
</nav>

<!-- JavaScript สำหรับเปิด/ปิดเมนูในมือถือ -->
<script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
        document.getElementById("mobile-menu").classList.toggle("hidden")
    })
</script>
