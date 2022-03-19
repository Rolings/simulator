@extends('app')
@section('title','Clubs')
@section('content')
    <div class="container">
        @include('section.navbar',['active'=>'club.clubs'])
        <div class="row">
            <div class="col-sm-6">
                <form action="{{ route('club.update',$club->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$club->name}}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="played" class="form-label">Played</label>
                        <input type="text" class="form-control" id="played" name="played" value="{{$club->played}}">
                        @error('played')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="won" class="form-label">Won</label>
                        <input type="text" class="form-control" id="won" name="won" value="{{$club->won}}">
                        @error('won')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="drawn" class="form-label">Drawn</label>
                        <input type="text" class="form-control" id="drawn" name="drawn" value="{{$club->drawn}}">
                        @error('drawn')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="lost" class="form-label">lost</label>
                        <input type="text" class="form-control" id="lost" name="lost" value="{{$club->lost}}">
                        @error('lost')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="goal_difference" class="form-label">Goal difference</label>
                        <input type="text" class="form-control" id="goal_difference" name="goal_difference" value="{{$club->goal_difference}}">
                        @error('goal_difference')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                    <a class="btn btn-outline-info" href="{{ route('club.index') }}">Back</a>
                </form>
            </div>

        </div>
    </div>
@endsection