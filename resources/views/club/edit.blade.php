@extends('app')
@section('title','Clubs')
@section('content')
    <div class="container">
        @include('section.navbar',['active'=>'club.clubs'])
    </div>
@endsection