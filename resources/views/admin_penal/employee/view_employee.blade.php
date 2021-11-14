@extends('admin_penal.hader.navbar')

@section('content')
    <div class="card text-dark">
        <h4 class="mx-auto">View all employee:</h4>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>SNo.</th>
                    <th>Name.</th>
                    <th>Email.</th>
                    <th>compony_id</th>
                    <th>phone</th>
                    <th>Action</th>
                </tr>
                @foreach ($data as $d )
                <tr>
                    <td>{{ $d->id}}</td>
                    <td>{{ $d->first_name}} {{$d->last_name}}</td>
                    <td>{{ $d->email}}</td>
                    <td>{{ $d->company_id}}</td>
                    <td>{{ $d->phone}}</td>
                    <td class="d-flex">
                        <a href="{{ route('edit_employee',['id'=>$d->id])}}" class="btn btn-info">Edit</a>
                        <a href="{{ route('delete_employee',['id'=>$d->id]) }}" class="btn btn-danger ms-1">delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection