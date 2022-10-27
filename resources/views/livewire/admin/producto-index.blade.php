<div>
    @if (session('info'))
    <div class="alert alert-info" role="alert" >
    <strong>{{session('info')}}</strong>
    </div>


    @elseif (session('success'))
        <div class="alert alert-primary" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @elseif (session('danger'))
        <div class="alert alert-danger">
            <strong>{{session('danger')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif
    <div class="card">

        <div class="card-header">
            <div class="input-group">
                <div class="input-group-append">
                    <button class="btn"><i class="fas fa-search"></i></button>
                </div>
                <input wire:model="search"  class="form-control" placeholder="Buscar Producto">
            </div>
         </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center bg-amber-200">Id</th>
                        <th class="text-center bg-amber-200">Name</th>
                        <th class="text-center bg-amber-200">Caracteristicas</th>
                        <th class="text-center bg-amber-200">Color</th>
                        <th class="text-center bg-amber-200">Tamaño</th>
                        <th class="text-center bg-amber-200">Descripción</th>
                        <th class="text-center bg-amber-200" colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)

                        <tr>
                            <td class="text-center">{{$producto->id}} </td>
                            <td class="text-center">{{$producto->nombre}}</td>
                            <td class="text-center">{{$producto->caracteristica}}</td>
                            <td class="text-center">{{$producto->color->color}}</td>
                            <td class="text-center">{{$producto->tamaño->tamaño}}</td>
                            <td class="text-center">{{$producto->descripcion}}</td>
                            <td class="text-center"><a class="btn btn-success" href="{{route('admin.productos.edit', $producto)}}">Editar</a></td>
                            <td class="text-center">
                                <form action="{{route('admin.productos.destroy',$producto)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" onclick="return confirm(¿Quiere Eliminar el Producto?)" class=" text-white btn bg-red-800" value="Eliminar" >
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <div class="card-footer">
            {{$productos->links()}}
        </div>

    </div>
</div>
