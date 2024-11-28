<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
    aria-controls="sidebar-multi-level-sidebar" type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="sidebar-multi-level-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <a href="{{ route('quran.index') }}"><img src="{{ asset('images/logo-sahabatmuslim.png') }}" alt=""
                    class="w-24 h-24 place-self-center"></a>

            <label class="flex items-center justify-center cursor-pointer mb-3">
                <span class="me-3 text-sm font-medium text-gray-900 dark:text-gray-300">Juz</span>
                <input type="checkbox" value="" class="sr-only peer" id="toggleJuzOrSurah">
                <div
                    class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-amber-300 dark:peer-focus:ring-amber-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-amber-600">
                </div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Surat</span>
            </label>

            <div id="menu-juz" class="space-y-2">
                @for ($i = 0; $i <= 30; $i++)
                    <li>
                        <a href="/quran/juz/{{ $i }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group {{ request()->is('quran/juz/' . $i) ? 'active' : '' }}">
                            <span class="flex-1 ms-3 whitespace-nowrap">Juz {{ $i }}</span>
                        </a>
                    </li>
                @endfor
            </div>

            <div id="menu-surah" class="space-y-2 hidden">
                @foreach ($surah['data'] as $s)
                    <li>
                        <a href="/quran/surah/{{ $s['number'] }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group {{ request()->is('quran/surah/' . $s['number']) ? 'active' : '' }}">
                            <span class="flex-1 ms-3 whitespace-nowrap">Surah
                                {{ $s['name']['transliteration']['id'] }}</span>
                        </a>
                    </li>
                @endforeach
            </div>
        </ul>
    </div>
</aside>
