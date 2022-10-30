
<nav class="bg-gray-800 " x-data = "{open:false}">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
         <!-- Mobile menu button-->
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
       
        <button x-on:click="open = true " type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/bars-3

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x-mark

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
        <!--logotipo-->
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <a href="/" class="flex flex-shrink-0 items-center">
          <img class="block h-8 w-auto lg:hidden" src="/img/logo.jpeg"  alt="Your Company">
          <img class="hidden h-8 w-auto lg:block" src="/img/logo.jpeg" alt="Your Company">
        </a>
        <!--menu-->
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <!-- <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a> -->

            <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">inicio</a>

            <a href="{{route('pedidos.index')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">pedidos</a>

            <a href="{{route('productos.index')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">productos</a>
          </div>
        </div>
      </div>
      @auth 
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <!--notificaciones-->
        <div class="px-4">
        @livewire('dropdown-cat')
    <!-- <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
        <svg class="w-6 h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

          <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" class="fill-gray-600" stroke="none">
          <path d="M115 4885 c-117 -55 -150 -198 -68 -296 52 -62 62 -64 357 -69 l270 -5 314 -1315 c338 -1417 318 -1346 396 -1404 27 -21 29 -21 1573 -24 l1546 -2 44 21 c83 40 74 11 335 1067 257 1039 253 1015 207 1088 -11 19 -40 45 -63 59 l-43 25 -1896 0 c-1257 0 -1898 3 -1902 10 -3 6 -46 177 -95 381 -98 405 -104 420 -180 459 -37 19 -59 20 -402 20 -291 -1 -369 -4 -393 -15z m4565 -1242 c0 -5 -83 -341 -183 -748 l-183 -740 -1341 -3 -1341 -2 -16 67 c-8 38 -87 369 -176 738 -88 368 -160 675 -160 682 0 11 333 13 1700 13 935 0 1700 -3 1700 -7z"></path>
          <path d="M1560 1467 c-435 -130 -604 -653 -323 -1004 136 -170 318 -252 532 -240 170 9 302 68 423 190 53 52 78 89 112 160 52 109 66 168 66 285 0 175 -62 325 -186 449 -57 57 -90 80 -165 116 -52 25 -118 50 -147 56 -89 18 -227 13 -312 -12z m285 -382 c191 -92 192 -357 1 -458 -57 -30 -165 -30 -222 0 -79 42 -144 145 -144 228 0 48 33 128 68 167 54 60 122 90 197 85 33 -2 78 -12 100 -22z"></path>
          <path d="M3902 1476 c-102 -26 -217 -92 -296 -170 -60 -59 -82 -90 -119 -167 -53 -110 -67 -169 -67 -284 0 -106 14 -171 55 -262 112 -243 347 -385 614 -370 168 9 294 65 414 184 74 73 119 144 155 245 23 64 26 88 27 198 0 102 -4 138 -22 195 -60 188 -208 341 -401 413 -55 20 -89 26 -187 28 -78 2 -139 -1 -173 -10z m248 -387 c201 -91 210 -359 16 -462 -57 -30 -165 -30 -222 0 -204 108 -187 386 31 470 48 18 125 15 175 -8z"></path>
          </g>
          </svg>
        </button> -->

        </div>
        <!-- Profile dropdown -->
        <div class="relative ml-3" x-data="{open:false}">
          <div>
            <button x-on:click="open = true" type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
            </button>
          </div>

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div x-show="open" x-on:click.away="open = false" class="absolute right-0 z-30 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">tu perfil</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">pedidos</a>
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
              <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2" x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                  
                  cerrar secion 
              </a>
            </form>

          </div>
        </div>
      </div>
      @else 
      <div>
          <a href="{{route('login')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
            login
          </a>
          <a href="{{route('register')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">register</a>
          
      </div>
      @endauth

    </div>
    
  </div>

  <!-- Mobile menu. -->
  <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <!-- <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a> -->

      <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">inicio</a>

      <a href="{{route('productos.index')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">productos</a>

      <a href="{{route('pedidos.index')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">pedidos</a>
    </div>
  </div>
</nav>
