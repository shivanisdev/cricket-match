@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                {{ __('Players of '. $team->name) }}
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-primary float-right" href="{{ route('teams') }}">{{ __('Back') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Country</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($players as $player)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><img src="{{ ($player->image_uri) ?? asset('images/default.png') }}"
                                             alt="{{ $player->first_name }}" width="50px" height="50px"></td>
                                    <td>{{ $player->first_name .' '.$player->last_name }}</td>
                                    <td>{{ $player->country }}</td>
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
