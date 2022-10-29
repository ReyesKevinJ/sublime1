<div>
    @if (session('danger'))
    <div class="alert alert-success" role="alert" >
    <strong>{{session('danger')}}</strong>
    </div>
    @endif
<div class="card">

    <div class="card-header">
        <div class="input-group">
            <div class="input-group-append">
                <button class="btn"><i class="fas fa-search"></i></button>
            </div>
            <input wire:model="search" type="date" class="form-control">
        </div>
     </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center bg-amber-200">Id</th>
                    <th class="text-center bg-amber-200">Fecha</th>
                    <th class="text-center bg-amber-200 item-aling-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)

                    <tr>
                        <td class="text-center">{{$pedido->id}} </td>
                        <td class="text-center">{{$pedido->created_at}}</td>
                        <td class="text-center"><a class="btn btn-success" href="{{route('admin.pedidos.show', $pedido)}}">Ver Pedido</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$pedidos->links()}}
    </div>

</div>
