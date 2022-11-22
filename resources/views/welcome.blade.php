<x-app-layout>
    <div class="container py-8 ">


        <div id="indicators-carousel" class="relative" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                 <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src={{url('/img/1.jpeg')}} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src={{url('/img/2.jpeg')}} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src={{url('/img/3.jpeg')}} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src={{url('/img/4.jpeg')}} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>

            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>



        <h2  class="italic m-5 py-5 text-xl" style="text-align:center">Nosotros</h2>

        <section
          class="relative bg-[url('C:\xampp\htdocs\sublime1\public\img\baner.jpeg')] bg-cover bg-center bg-no-repeat"
        >
          <div
            class="absolute inset-0 bg-white/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-white/95 sm:to-white/25"
          ></div>

          <div
            class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8"
          >
            <div class="max-w-xl text-center sm:text-left">
              <h1 class="text-3xl font-extrabold sm:text-5xl">
               Sublime

                <strong class="block font-extrabold text-rose-700">
                Fire
                </strong>
              </h1>

              <p class="mt-4 max-w-lg sm:text-xl sm:leading-relaxed">
              Si puedes soñarlo puedes personalizarlo.
              </p>


              </div>
            </div>
        </section>


        <h2  class="italic m-5 py-5 text-xl" style="text-align:center">Ultimos productos</h2>

        <div class="py-4">
            <a href="{{route('productos.index')}}" class="text-blue-600 visited:text-blue-600">Ver todos</a>
        </div>


        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($productos as $producto )
                    <div class="group relative bg-white rounded-md">
                        <a href="{{route('productos.show' , $producto)}}">
                      <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-t-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                        <img src="{{Storage::url($producto->image->url)}}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                      </div>
                      <div class="mt-4 flex justify-between rounded-b-md shadow-lg px-6 py-4">
                        <div>
                          <h3 class="text-lg text-gray-700">
                              <span aria-hidden="true" class="absolute inset-0"></span>
                              {{$producto->nombre}}
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">${{$producto->precio}}</p>
                    </div>
                </a>
                    </div>




                    @endforeach
                </div>




        </div>
    </div>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</div>







</div>
</x-app-layout>

