@extends('layouts.app')

@section('title')Profil @endsection

@section('content')

    <div class="row">
        <div class="col-md-3">
            <ul class="sidebar-list">
                <li class="sidebar-item"><a href="{{ route('rooms') }}">Listing Milikmu</a></li>
                <li class="sidebar-item">
                    <a href="{{ route('your-reservations') }}">Reservasi Masuk Milikmu</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('your-trips') }}" class=" sidebar-link active">Reservasi Milikmu</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Reservasi
                </div>
                <div class="panel-body">
                    @foreach($trips as $trip)
                        <div class="row">
                            <div class="col-md-2">
                                {{ \Carbon\Carbon::parse($trip->start_date)->diffForHumans() }}
                            </div>
                            <div class="col-md-2">
                                <a href="{{ route('rooms.show', $trip->room) }}">{{ $trip->room->listing_name }}</a>
                            </div>
                            <div class="col-md-6">
                                <img class="img-responsive" style="width: 150px"
                                     src="{{ asset("images/rooms/".$trip->room->photos[0]->name) }}">
                            </div>
                            <div class="col-md-2">
                                <a href="">
                                    <img src="{{ Gravatar::get($trip->user->email, ['size'=>30]) }}" alt="">
                                </a>
                            </div>
                            <div class="col-md-2 right">
                                <h4>Rp {{ $trip->total }}</h4>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection