@extends('layouts.app')

@section('content')
<h1>Home view</h1>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to sidebar</p>
@endsection
