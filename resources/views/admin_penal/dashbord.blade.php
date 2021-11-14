@extends('admin_penal.hader.navbar')

@section('content')
    <h3>Welcome {{ Auth::user()->name}}...</h3>
@endsection