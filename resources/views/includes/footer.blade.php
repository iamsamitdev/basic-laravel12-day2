{{-- <footer>
    <div class="container">
        <div class="flex">
            <p>&copy; 2025 - All Rights with ITGenius</p>
        </div>
    </div>
</footer> --}}

<footer class="bg-gray-900 text-gray-300 py-8">
    <div class="container mx-auto px-4 md:px-0">
        <!-- Grid Layout -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- ข้อมูลเว็บไซต์ -->
            <div>
                <h3 class="text-xl font-semibold text-white">About Us</h3>
                <p class="mt-2 text-sm">We provide the best web development tutorials and resources.</p>
            </div>

            <!-- เมนูลิงก์ -->
            <div>
                <h3 class="text-xl font-semibold text-white">Quick Links</h3>
                <ul class="mt-2 space-y-2">
                    <li><a href="{{ route('home') }}" class="hover:text-gray-400">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-gray-400">About</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-gray-400">Contact</a></li>
                </ul>
            </div>

            <!-- โซเชียลมีเดีย -->
            <div>
                <h3 class="text-xl font-semibold text-white">Follow Us</h3>
                <div class="flex space-x-4 mt-2">
                    <a href="#" class="hover:text-blue-400"><i class="fab fa-facebook text-xl"></i></a>
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-twitter text-xl"></i></a>
                    <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram text-xl"></i></a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-8 border-t border-gray-700 pt-4 text-center">
            <p>&copy; 2025 - All Rights Reserved with 
                <a href="https://www.itgenius.co.th" class="text-blue-400 hover:underline"> ITGenius</a>
            </p>
        </div>
    </div>
</footer>