<x-app-layout>
    <div class="container center py-8">
    @foreach ($pedidos as $pedido)
     <!-- component -->
  <div class="max-w-4xl px-10 mb-4 py-6 bg-white rounded-lg shadow-md">
          <div class="flex justify-between items-center">
              <span class="font-light text-gray-600">{{$pedido ->created_at}}</span>
              <a class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500" href="{{route('pedidos.show' , $pedido)}}">detalles</a>
          </div>
          <div class="mt-2">
              <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">pedido numero {{$pedido ->id}}</a>
              <p class="mt-2 text-gray-600">{{$pedido ->nombre}}</p>
          </div>

      </div>
      @endforeach
      <div>
        {{$pedidos->links()}}
      </div>
    </div>





  </x-app-layout>
