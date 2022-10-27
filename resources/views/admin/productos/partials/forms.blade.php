<div>
    <div class="form group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class'=>'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm','placeholder'=>'Ingresar Nombre de Producto']) !!}
        @error('nombre')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form group">
        {!! Form::label('caracteristica', 'Caracteristicas',['class'=>'block text-sm font-medium text-gray-700']) !!}
        {!! Form::text('caracteristica', null, ['class'=>'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm','placeholder'=>'Ingresar Caracteristicas de Producto']) !!}
        @error('caracteristica')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form group">
        {!! Form::label('descripcion', 'Descripción') !!}
        {!! Form::textarea('descripcion', null, ['class'=>'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm','placeholder'=>'Ingresar Descripción de Producto']) !!}
        @error('descripcion')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form group">
        {!! Form::label('precio', 'Precio') !!}
        <div class="relative mt-1 rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                <span class="text-gray-500 sm:text-sm">$</span>
              </div>
        {!! Form::number('precio', null, ['class'=>'block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="0.00','placeholder'=>'0.00']) !!}
        </div>
        @error('precio')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
     <div class="col-span-6 sm:col-span-3">
        {!! Form::label('color_id','Color',['class'=>'block text-sm font-medium text-gray-700']) !!}
        {!! Form::select('color_id', $color,null,['class'=>'mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm' ,'placeholder'=>'Seleccionar Color']) !!}
        @error('color_id')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
        {!! Form::label('tamaño_id','Tamaño',['class'=>'block text-sm font-medium text-gray-700']) !!}
        {!! Form::select('tamaño_id', $tamaño,null,['class'=>'mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm' ,'placeholder'=>'Seleccionar Tamaño']) !!}
        @error('tamaño_id')
            <span class="taxt-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="row text-center mb-5">
            @isset($producto->image)
            <img id="picture" src="{{Storage::url($producto->image->url)}}" alt="">
            @else
            <img id="picture" class="img-fluid" src="/img/logo2.png" alt="">
            @endisset
        </div>

        <div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Cargar Imagen</label>
                <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                  <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="image" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                        <span>Upload a file</span>
                        <input id="image" name="image" type="file" class="sr-only" accept="image/*">
                      </label>

                    </div>
                    @error('image')
                    <span class="taxt-danger">{{$menssage}}</span>
                    @enderror
                  </div>
            </div>

    <div class="mt-3">
        {!! Form::submit('Guardar',['class'=>'btn bg-sky-500 text-white'] ) !!}
    </div>
