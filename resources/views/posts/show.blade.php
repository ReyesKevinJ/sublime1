<x-app-layout>

    <div class="min-w-screen min-h-screen  bg-gradient-to-b from-gray-800 to-white flex items-center p-5 lg:p-10 overflow-hidden relative">
        <div class="w-full max-w-6xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
            <div class="md:flex items-center -mx-10">
                <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                    <div class="relative">
                        <img src="{{url($producto->image->url)}}" class="w-full relative z-10" alt="">
                        <img src="{{Storage::url($producto->image->url)}}" class="w-full relative z-10" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-10">
                    <div class="mb-10">
                        <h1 class="font-bold uppercase text-2xl mb-5">  {{$producto->nombre}} <p class="text-sm">{{$producto->color->color}}</p> </h1>
                        <p class="text-sm">{{$producto->caracteristica}}<a href="#" class="opacity-50 text-gray-900 hover:opacity-100 inline-block text-xs leading-none border-b border-gray-900"></a></p>
                        <p class="text-lg">{{$producto->descripcion}}<a href="#" class="opacity-50 text-gray-900 hover:opacity-100 inline-block text-xs leading-none border-b border-gray-900"></a></p>
                    </div>
                    <div>
                        <div class="inline-block align-bottom mr-5">
                            <span class="text-2xl leading-none align-baseline">$</span>
                            <span class="font-bold text-5xl leading-none align-baseline">{{$producto->precio}}</span>

                        </div>
                        <div class="inline-block align-bottom">
                            <form action="{{route('agregaritem')}}">
                                @csrf
                                <input type="hidden" name="producto_id" value="{{$producto->id}}" id="">
                                <input type="submit" class="bg-yellow-300 opacity-75 hover:opacity-100 text-yellow-900 hover:text-gray-900 rounded-full px-10 py-2 font-semibold" value="PEDIR"><i class="mdi mdi-cart -ml-2 mr-2"></i>
                            </form>

                        </div>
                        @foreach (Cart::content() as $item)
                        <!-- <div class=" btn-group btn-group-sm" role="group" aria-label="Small button group">
                            <a href="" class="btn btn-success">-</a>
                            <button type="button" class=" btn">{{$item->qty}}</button>
                            <a href="" class="btn btn-success">+</a>
                        </div> -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    </x-app-layout>
