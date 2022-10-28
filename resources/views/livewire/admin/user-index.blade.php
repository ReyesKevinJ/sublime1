<div>
    <div class="card">

        <div class="card-header">
            <div class="input-group">
                <div class="input-group-append">
                    <button class="btn"><i class="fas fa-search"></i></button>
                </div>
                <input wire:model="search" class="form-control">
            </div>
         </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center bg-amber-200">Id</th>
                        <th class="text-center bg-amber-200">Name</th>
                        <th class="text-center bg-amber-200">Email</th>
                        <th class="text-center bg-amber-200 item-aling-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)

                        <tr>
                            <td class="text-center">{{$user->id}} </td>
                            <td class="text-center">{{$user->name}}</td>
                            <td class="text-center">{{$user->email}}</td>
                            <td class="text-center"><a class="btn btn-primary" href="{{route('admin.users.edit', $user)}}">Editar</a></td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="card-footer">
                {{$users->links()}}
            </div>
        </div>
</div>
