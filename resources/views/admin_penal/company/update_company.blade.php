@extends('admin_penal.hader.navbar')

@section('content')
    <div class="card bg-dark ">
        <div class="card-body text-white">
            <div class="card-header">
                <h1>Update Company.</h1>
            </div>
            <form action="{{ route('update_company',['id'=>$item->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="">Name:</label>
                    <input type="text" name="name" value="{{ $item->name}}" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">email:</label>
                    <input type="email" name="email" value="{{ $item->email}}" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">website:</label>
                    <input type="text" name="website" value="{{ $item->website}}" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">logo:</label>
                    <input type="file" name="logo" value="{{ $item->logo}}" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="submit" value="Create" class="btn btn-success w-100">
                </div>
            </form>
        </div>
    </div>
@endsection