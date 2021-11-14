@extends('admin_penal.hader.navbar')

@section('content')
    <div class="card bg-dark ">
        <div class="card-body text-white">
            <div class="card-header">
                <h1>Create new employee.</h1>
            </div>
            <form action="{{ route('create_employee') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="">first name:</label>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">last name:</label>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">email:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">phone:</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">select compony:</label>
                    <select name="company_id" id="" class="form-control w-50">
                        <option value="">Select</option>
                        @foreach ($data as $d )
                            <option value="{{$d->id}}">{{$d->id}}</option>
                        @endforeach
                        
                    </select>
                </div>
                <div class="mb-2">
                    <input type="submit" value="Create" class="btn btn-success w-100">
                </div>
            </form>
        </div>
    </div>
@endsection