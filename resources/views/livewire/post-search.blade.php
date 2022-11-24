<div class = "container py-8  ">
    <!-- Creacte By Joker Banny -->


    <div class="flex">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">Filtrar por Precio<svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
            <li>
                <input type="radio" wire:model="price" id="hosting-small" name="hosting" value="mayor" class="hidden peer" required>
        <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-900 bg-white rounded-lg border border-gray-200 cursor-pointer dark:hover:text-white dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-1000 hover:bg-gray-100 dark:text-white dark:bg-gray-700 dark:hover:bg-gray-800">
            <div class="block">
                <div class="w-full text-md font-semibold">Mayor a Menor</div>

            </div>

        </label>
            </li>
            <li>
                <input type="radio" wire:model="price" id="menor" name="menor" value="menor" class="hidden peer" required>
        <label for="menor" class="inline-flex justify-between items-center p-5 w-full text-gray-900 bg-white rounded-lg border border-gray-200 cursor-pointer dark:hover:text-white dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-1000 hover:bg-gray-100 dark:text-white dark:bg-gray-700 dark:hover:bg-gray-800">
            <div class="block">
                <div class="w-full text-md font-semibold">Menor a Mayor</div>

            </div>

        </label>
            </li>

            </ul>
        </div>
        <div class="relative w-full">
            <input autocomplete="off"  wire:model="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Buscar por nombre" required>
            <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>

        </div>
    </div>



    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($productos as $producto )
                <div class="group relative bg-white rounded-md">
                    <a href="{{route('productos.show' , $producto)}}">
                  <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-t-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                    <img src="{{Storage::url($producto->image->url)}}" alt="Error al cargar imagen." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                  </div>
                  <div class="mt-4 flex justify-between rounded-b-md shadow-lg px-6 py-4">
                    <div>
                      <h3 class="text-lg text-gray-700">
                          <span aria-hidden="true" class="absolute inset-0"></span>
                          {{$producto->nombre}}
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">{{$producto->color->color}}</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">${{$producto->precio}}</p>
                </div>
            </a>
                </div>




                @endforeach
            </div>
</div>
    <div class="m-4">
    {{$productos->links()}}
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js" integrity="sha512-axJX7DJduStuBB8ePC8ryGzacZPr3rdLaIDZitiEgWWk2gsXxEFlm4UW0iNzj2h3wp5mOylgHAzBzM4nRSvTZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://flowbite.com/docs/flowbite.js?v=1.5.4a"></script>
<script src="https://flowbite.com/docs/datepicker.js?v=1.5.4a"></script>
<script src="https://flowbite.com/docs/docs.js?v=1.5.4a"></script>
</div>
