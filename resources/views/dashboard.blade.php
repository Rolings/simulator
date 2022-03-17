@extends('app')
@section('title','Dashboard')
@section('content')
    <div class="container">
        @include('section.navbar',['active'=>'dashboard'])
    </div>
@endsection