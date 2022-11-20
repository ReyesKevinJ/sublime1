<x-app-layout>

    <div class = "container py-8  ">

        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($productos as $producto )
                    <div class="group relative bg-white rounded-md">
                        <a href="{{route('productos.show' , $producto)}}">
                      <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-t-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                        <img src="{{url($producto->image->url)}}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
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
        <div class="m-4">
        {{$productos->links()}}
    </div>




</div>

    </x-app-layout>
