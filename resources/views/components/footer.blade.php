<footer class="bg-gray-50 dark:bg-gray-800 antialiased">
    <div class="p-4 py-8 mx-auto max-w-screen-xl md:p-8 lg:p-10">
        <div class="grid grid-cols-2 gap-8 md:grid-cols-4 lg:grid-cols-4">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Menu</h2>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="{{ route('home') }}" class=" hover:underline">Beranda</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('blog.index') }}" class="hover:underline">Blog</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('doa.index') }}" class="hover:underline">Doa</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('quran.index') }}" class="hover:underline">Al Qur'an</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('about.index') }}" class="hover:underline">Tentang</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">API Source</h2>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="https://api.quran.gading.dev/" class="hover:underline">API Qur'an Gading Dev</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Teknologi</h2>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="https://laravel.com" class=" hover:underline">Laravel</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://filamentphp.com" class="hover:underline">Filament</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://tailwindcss.com" class="hover:underline">Tailwind CSS</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://flowbite.com" class="hover:underline">Flowbite</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Tim Kami</h2>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="https://instagram.com/ranqkuty" class="hover:underline">Ibrahim Rangkuti</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://www.instagram.com/rezaprasra/" class="hover:underline">Muhammad Reza</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://www.instagram.com/pratisena_me/" class="hover:underline">Pratisena Bhadrika</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://www.instagram.com/rackka_20/" class="hover:underline">Raditya Meyka</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <div class="text-center">
            <a href="{{ route('home') }}"
                class="flex justify-center items-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                <img src="{{ asset('images/logo-sahabatmuslim.png') }}" alt="" width="120" height="120">
            </a>
            <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© 2024 <a
                    href="{{ route('home') }}" class="hover:underline">Sahabat Muslim</a>. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>
