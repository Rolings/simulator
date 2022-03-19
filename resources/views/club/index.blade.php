@extends('app')
@section('title','Clubs')
@section('content')
    <div class="container">
        @include('section.navbar',['active'=>'club.clubs'])
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Teams</th>
                    <th scope="col">PTS</th>
                    <th scope="col">P</th>
                    <th scope="col">W</th>
                    <th scope="col">D</th>
                    <th scope="col">L</th>
                    <th scope="col">GD</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @forelse($clubs as $club)
                    <tr>
                        <th scope="row">{{ $loop->index }}</th>
                        <td>{{ $club->name }}</td>
                        <td>{{ $club->points }}</td>
                        <td>{{ $club->played }}</td>
                        <td>{{ $club->won }}</td>
                        <td>{{ $club->drawn }}</td>
                        <td>{{ $club->lost }}</td>
                        <td>{{ $club->goal_difference }}</td>
                        <td>{{ $club->points }}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <a class="btn btn-success" href="{{ route('club.edit',$club->id) }}">Edit</a>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <form action="{{ route('club.destroy',$club->id) }}" method="post">
                                        @csrf()
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>
            {{ $clubs->links('section.pagination') }}
        </div>
    </div>
@endsection