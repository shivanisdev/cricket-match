@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Teams') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Info</th>
                                <th scope="col">State</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><img src="{{ ($team->log_uri) ?? asset('images/default.png') }}"
                                             alt="{{ $team->name }}" width="50px" height="50px"></td>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->club_state }}</td>
                                    <td>
                                        <a href="{{ route('players', [$team->id]) }}" class="btn btn-info">Players</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
