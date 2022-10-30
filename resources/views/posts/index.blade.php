<x-app-layout>

    <div class = "container py-8  ">

        <div class="grid grid-cols-3 gap-4">

        @foreach ($productos as $producto )
        <a href="{{route('productos.show' , $producto)}}">
    <div class=" max-w-sm rounded overflow-hidden shadow-lg  bg-white ">
        <img class="w-full" src="{{url($producto->image->url)}}" alt="" >
        <img class="w-full" src="{{Storage::url($producto->image->url)}}" alt="" >

        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">
                {{$producto->nombre}}
            </div>
            <h2 class="text-3xl leading-7 fond-bold">
                           $ {{$producto->precio}}
            </h2>
        </div>

    </div>
    @endforeach
    </div>
    </div>
        <div class="m-4">
        {{$productos->links()}}
    </div>




</div>

    </x-app-layout>
