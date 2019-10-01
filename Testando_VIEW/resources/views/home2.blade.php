@extends('layouts.base2')
@section('title', 'Home')
@section('maisinfo')
    <p>Developed by: <strong>Prodabel</strong></p>
@endsection
@section('content')
    @component('alert')
        <strong>Whoops!</strong> Something went wrong!
    @endcomponent
    <div class="jumbotron">
        Oi
    </div>
@endsection
@section('sidebar')
    @parent
    <p>Mais uma info</p>
@endsection


