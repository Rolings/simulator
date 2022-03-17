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
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                @forelse($clubs as $club)

                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>

                @empty
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection