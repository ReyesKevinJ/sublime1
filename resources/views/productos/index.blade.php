<x-app-layout>

<div class = "container py-8  ">
       
        <div class="grid grid-cols-3 gap-4">
       
        @foreach ($productos as $producto )
        <a href="{{route('productos.show' , $producto)}}">
    <div class=" max-w-sm rounded overflow-hidden shadow-lg  bg-white ">
        <img class="w-full" src="{{url($producto->image->url)}}" alt="Sunset in the mountains" >
    
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






<!-- 
    <div class = "container py-8">
        <div class="card card-compact grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            

            @foreach ($productos as $producto )
            <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2  @endif" style="background-image: url({{$producto->image->url}})">
                <div class="w-full h-full px-8 flex flex-col justify-center">
                    <h1 class="text-4xl text-white leading-8 fond-bold">
                        <a href="{{route('productos.show' , $producto)}}">
                            {{$producto->nombre}}
                        </a>
                    </h1>
                    <h2 class="text-3xl text-white leading-7 fond-bold">
                        {{$producto->precio}}
                    </h2>
                </div>

            </article>
              

            @endforeach 

        </div>
        <div class="mt-4">
        {{$productos->links()}} 
    </div>
    </div> -->
    
</x-app-layout>
