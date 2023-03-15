<div class="container my-5">
    <div class="row">
        <div class="col-lg-2">
            {{--  --}}
        </div>
        <div class="col-lg-8">
            <div class="d-flex justify-content-end">
                <button class="btn btn-success btn-sm my-2" data-bs-toggle="modal" data-bs-target="#store_team_Modal">
                    Add
                </button>
            </div>
            <table class="table table-dark table-bordered" id="table_motos">
                <thead>
                    <th width="5%" class="text-center">#</th>
                    <th width="25%" class="text-center">Team</th>
                    <th width="25%" class="text-center">Racer</th>
                    <th width="20%" class="text-center">Country</th>
                    <th width="30%" class="text-center">Actions</th>
                </thead>
                <tbody>
                    @foreach ($motos as $moto)
                        <tr>
                            <td>{{$moto->id}}</td>
                            <td>{{$moto->name}}</td>
                            <td>{{$moto->team}}</td>
                            <td>{{$moto->country}}</td>
                            <td class="text-center">
                                <button class="btn btn-success btn-sm">View</button>
                                <button class="btn btn-warning btn-sm btnEdit" data-bs-toggle="modal" data-bs-target="#edit_team_Modal" value="{{$moto->id}}">Edit</button>
                                <button class="btn btn-danger btn-sm btnDelete" value="{{$moto->id}}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{$motos->links()}}
            </div>
        </div>
        <div class="col-lg-2">
            {{--  --}}
        </div>
    </div>
</div>
