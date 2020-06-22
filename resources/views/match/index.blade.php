@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                {{ __('Matches Between Teams') }}
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
                                <th scope="col">Team1</th>
                                <th scope="col">Team2</th>
                                <th scope="col">Points of Team1</th>
                                <th scope="col">Points of Team2</th>
                                <th scope="col">Winner</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($matches as $match)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $match[0]->name }}
                                    </td>
                                    <td>
                                        {{ $match[1]->name }}
                                    </td>
                                    <td>{{ $point1 = rand(1,5) }}</td>
                                    <td>{{ $point2 = rand(1,5) }}</td>
                                    <td>{{ ($point1 > $point2) ? $match[0]->name : $match[1]->name }}</td>
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
