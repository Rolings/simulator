@extends('app')
@section('title','Simulator')
@section('content')
    <div class="container">
        @include('section.navbar',['active'=>'simulator'])
        <div class="row">
            <div class="col-sm-6">
                <h5 class="card-title">League table</h5>
                <div class="row">
                    <div class="col-sm-4 alert alert-light m-1">Teams</div>
                    <div class="col-sm-1 alert alert-light m-1">PTS</div>
                    <div class="col-sm-1 alert alert-light m-1">P</div>
                    <div class="col-sm-1 alert alert-light m-1">W</div>
                    <div class="col-sm-1 alert alert-light m-1">D</div>
                    <div class="col-sm-1 alert alert-light m-1">L</div>
                    <div class="col-sm-1 alert alert-light m-1">GD</div>
                </div>

                @forelse($clubs as $club)
                    <div class="row">
                        <div class="col-sm-4 alert alert-light m-1">{{ $club->name }}</div>

                        <div class="col-sm-1 alert alert-info m-1 text-center">{{ $club->points }}</div>
                        <div class="col-sm-1 alert alert-primary m-1 text-center">{{ $club->played }}</div>
                        <div class="col-sm-1 alert alert-success m-1 text-center">{{ $club->won }}</div>

                        <div class="col-sm-1 alert alert-warning m-1 text-center">{{ $club->drawn }}</div>
                        <div class="col-sm-1 alert alert-danger m-1 text-center">{{ $club->lost }}</div>
                        <div class="col-sm-1 alert alert-dark m-1 text-center">{{ $club->goal_difference }}</div>
                    </div>
                @empty
                    <div class="text-center">Clubs is empty</div>
                @endforelse

            </div>
            <div class="col-sm-6">
                <h5 class="card-title">Match Results</h5>
                <div class="row">
                    <div class="alert alert-light m-1 text-center">
                        4 Week match Result
                    </div>
                </div>
                @forelse($results as $result)
                    <div class="row">
                        <div class="col-sm-4 alert alert-success m-1 text-center">{{ $result->won->name }}</div>
                        <div class="col-sm-2 alert alert-warning m-1 text-center">
                            {{ $result->team_won_score.' - '.$result->team_lost_score }}
                        </div>
                        <div class="col-sm-4 alert alert-danger m-1 text-center">{{ $result->lost->name }}</div>
                    </div>
                @empty
                    <div class="text-center">Results is empty</div>
                @endforelse

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <button type="button" class="btn btn-success play-all-action">Play all</button>
            </div>
        </div>
    </div>
@endsection