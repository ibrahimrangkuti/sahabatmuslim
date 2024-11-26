<nav class="border-gray-200 bg-gray-900 shadow-lg">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between py-6 mx-auto">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo-sahabatmuslim.png') }}" class="h-10" alt="Sahabat Muslim" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Sahabat Muslim</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full px-4 md:px-0 md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-gray-900 border-gray-700">
                {{-- <li>
                    <a href="#"
                        class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                        aria-current="page">Beranda</a>
                </li> --}}
                <li>
                    <a href="{{ route('home') }}"
                        class="block py-2 px-3 rounded md:border-0 md:p-0 text-white md:hover:text-amber-500 hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('doa.index') }}"
                        class="block py-2 px-3 rounded md:border-0 md:p-0 text-white md:hover:text-amber-500 hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Doa</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 rounded md:border-0 md:p-0 text-white md:hover:text-amber-500 hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Hadist</a>
                </li>
                <li>
                    <a href="{{ url('/quran') }}"
                        class="block py-2 px-3 rounded md:border-0 md:p-0 text-white md:hover:text-amber-500 hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Al
                        Qur'an</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 rounded md:border-0 md:p-0 text-white md:hover:text-amber-500 hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Tentang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
