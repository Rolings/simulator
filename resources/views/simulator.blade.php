@extends('app')
@section('title','Simulator')
@section('content')
    <div class="container">
        @include('section.navbar',['active'=>'simulator'])
        <div class="row">
            <div class="col-sm-6">
                <h5 class="card-title">League table</h5>

                <div class="row">
                    <div class="col-sm-4">Teams</div>

                    <div class="col-sm-1">PTS</div>
                    <div class="col-sm-1">P</div>
                    <div class="col-sm-1">W</div>

                    <div class="col-sm-1">D</div>
                    <div class="col-sm-1">L</div>
                    <div class="col-sm-1">GD</div>
                </div>

                @forelse($clubs as $club)
                    <div class="row">
                        <div class="col-sm-4">Teams</div>

                        <div class="col-sm-1">PTS</div>
                        <div class="col-sm-1">P</div>
                        <div class="col-sm-1">W</div>

                        <div class="col-sm-1">D</div>
                        <div class="col-sm-1">L</div>
                        <div class="col-sm-1">GD</div>
                    </div>
                @empty
                    <div>Clubs is empty</div>
                @endforelse

            </div>
            <div class="col-sm-6">
                <h5 class="card-title">Match Results</h5>
                <div class="row text-center">
                    4 Week match Result
                </div>

                <div class="row">
                    <div class="col-sm-4">Club</div>
                    <div class="col-sm-4">2-2</div>
                    <div class="col-sm-4">Club</div>
                </div>

            </div>
        </div>
    </div>
@endsection