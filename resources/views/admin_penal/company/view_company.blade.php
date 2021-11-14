@extends('admin_penal.hader.navbar')

@section('content')
    <div class="card text-dark">
        <h4 class="mx-auto">View all company:</h4>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>SNo.</th>
                    <th>Name.</th>
                    <th>Email.</th>
                    <th>Website</th>
                    <th>Logo</th>
                    <th>Action</th>
                </tr>
                @foreach ($data as $d )
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->website}}</td>
                    <td><img src="{{ asset("logos/$d->logo")}}" width="50px" height="50px" alt=""></td>
                    <td class="d-flex">
                        <a href="{{ route('edit_company',['id'=>$d->id])}}" class="btn btn-info">Edit</a>
                        <a href="{{ route('delete_company',['id'=>$d->id]) }}" class="btn btn-danger ms-1">delete</a>
                    </td>
                </tr>
                @endforeach
                
            </table>
            <div class="d-flex">
                <h6 style="height: 50px;">{{ $data->links()}}</h6>
            </div>
        </div>
        
    </div>
@endsection