<x-app-layout>

    <div class = "container py-8  ">
        <!-- Creacte By Joker Banny -->
<div class="min-h-screen bg-gray-100 flex justify-center items-center">
	<div class="container mx-auto bg-indigo-500 rounded-lg p-14">
		<form>
			<h1 class="text-center font-bold text-white text-4xl">Find the perfect domain name</label>
				<p class="mx-auto font-normal text-sm my-6 max-w-lg">Enter your select domain name and choose any
					extension name in the next step (choose between .com, .online, .tech, .site, .net, and more)</p>
				<div class="sm:flex items-center bg-white rounded-lg overflow-hidden px-2 py-1 justify-between">
					<input class="text-base text-gray-400 flex-grow outline-none px-2 " type="text" placeholder="Search your domain name" />
					<div class="ms:flex items-center px-2 rounded-lg space-x-4 mx-auto ">
						<select id="Com" class="text-base text-gray-800 outline-none border-2 px-4 py-2 rounded-lg">
            <option value="com" selected>com</option>
            <option value="net">net</option>
            <option value="org">org</option>
            <option value="io">io</option>
          </select>
						<button class="bg-indigo-500 text-white text-base rounded-lg px-4 py-2 font-thin">Search</button>
					</div>
				</div>
		</form>
	</div>
</div>

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
