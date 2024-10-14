<div class="flex justify-end px-4">
    <!-- Hamburger icon only visible on screens below 1024px (lga:hidden ensures it's hidden on larger screens) -->
    <button id="hamburger" class="block rounded-lg bg-[#ccc] p-2 focus:outline-none xla:hidden">
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
</div>

<nav id="navbar"
    class="3xla:px-[15%] hidden w-full flex-col items-center justify-center border-t-2 px-[5%] pt-4 lga:items-center lga:justify-center lga:border-none lga:pt-0 xla:flex xla:gap-2 x2la:flex-row x2la:gap-0">
    <div class="flex w-full flex-row justify-between x2la:hidden">
        <img class='h-8 lga:h-12' src="{{ asset('assets/logobdc.png') }}" alt="">
        <img class='h-8 lga:h-12' src="{{ asset('assets/logoascee.png') }}" alt="">
    </div>
    <img class='hidden h-12 x2la:inline' src="{{ asset('assets/logobdc.png') }}" alt="">

    <ul
        class="mt-2 flex w-full flex-col flex-wrap gap-4 text-sm lga:text-base xla:mx-auto xla:w-auto xla:flex-row x2la:mt-0">
        @foreach ($navbarItems as $item)
            <li class="relative">
                <a href="{{ $item['url'] }}" class="flex flex-row items-center gap-2 truncate whitespace-nowrap"
                    @if (isset($item['subItems'])) onclick="toggleDropdown(event)" @endif>
                    {{ $item['label'] }}
                    @if (isset($item['subItems']))
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path
                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                        </svg>
                    @endif
                </a>
                @if (isset($item['subItems']))
                    <ul class="absolute left-0 z-[100] hidden rounded-md border-2 bg-white shadow-md">
                        @foreach ($item['subItems'] as $subItem)
                            <li class="{{ $loop->last ? '' : 'border-b' }} px-4 py-2 hover:bg-[#eee]">
                                <a class="block truncate whitespace-nowrap"
                                    href="{{ $subItem['url'] }}">{{ $subItem['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
    <img class='hidden h-12 x2la:inline' src="{{ asset('assets/logoascee.png') }}" alt="Logo ASCEE">
</nav>

<script>
    const hamburger = document.getElementById('hamburger');
    const navbar = document.getElementById('navbar');

    // Toggle navbar visibility on small screens
    hamburger.addEventListener('click', () => {
        navbar.classList.toggle('hidden');
        navbar.classList.toggle('flex');
    });

    // Ensure navbar visibility on resize
    window.addEventListener('resize', () => {
        const lgaBreakpoint = window.matchMedia("(min-width: 1024px)"); // 1024px breakpoint for lga

        if (lgaBreakpoint.matches) {
            // Show the navbar on large screens
            navbar.classList.add('flex');
            navbar.classList.remove('hidden');
            hamburger.classList.add('hidden'); // Hide burger icon on large screens
        } else {
            // Show the burger icon and hide navbar on small screens
            hamburger.classList.remove('hidden');
            if (!navbar.classList.contains('flex')) {
                navbar.classList.add('hidden');
            }
        }
    });

    // Handle the dropdown toggle
    function toggleDropdown(event) {
        event.preventDefault();

        const dropdown = event.currentTarget.nextElementSibling;
        const isVisible = !dropdown.classList.contains('hidden');

        const allDropdowns = document.querySelectorAll('.absolute.left-0');
        allDropdowns.forEach(d => d.classList.add('hidden'));

        if (!isVisible) {
            dropdown.classList.remove('hidden');
        }
    }
</script>
