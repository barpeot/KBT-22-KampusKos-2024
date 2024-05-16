@extends('layouts.app')

@section('title')Home @endsection

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('search.rooms') }}" method="GET">
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" placeholder="Mau nginap dimana?" class="form-control" name="search">
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="btn btn-primary" value="Search">
                    </div>
                </div>
            </form>

            <hr>
            {{-- @if(!isset($search)) --}}
            <div class="text-center">
                <h2>Cari Kos yang Sesuai Denganmu</h2>
                <p>Temukan lokasi strategis di dekat kampus.</p>
            </div>

            <br>

            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                    {{--Wrapper for slides--}}
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="discovery-card" style="background-image: url({{ asset('/images/Surabaya.jpg') }})">
                                <div class="va-container">
                                    <div class="va-middle text-center">
                                        <form action="{{ route('search.rooms') }}" method="GET">
                                            <button type="submit" class="btn btn-link" style="text-decoration: none; background: none; border: none;"><div class="va-middle text-center">
                                                <h2><strong>Surabaya</strong></h2>
                                            </div></button>
                                            <input type="hidden" name="search" value="Surabaya">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="discovery-card" style="background-image: url({{ asset('/images/Malang.jpg') }})">
                                <div class="va-container">
                                    <div class="va-middle text-center">
                                        <form action="{{ route('search.rooms') }}" method="GET">
                                            <button type="submit" class="btn btn-link" style="text-decoration: none; background: none; border: none;"><div class="va-middle text-center">
                                                <h2><strong>Malang</strong></h2>
                                            </div></button>
                                            <input type="hidden" name="search" value="Malang">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="discovery-card" style="background-image: url({{ asset('/images/Kediri.jpg') }})">
                                <div class="va-container">
                                    <div class="va-middle text-center">
                                        <form action="{{ route('search.rooms') }}" method="GET">
                                            <button type="submit" class="btn btn-link" style="text-decoration: none; background: none; border: none;"><div class="va-middle text-center">
                                                <h2><strong>Kediri</strong></h2>
                                            </div></button>
                                            <input type="hidden" name="search" value="Kediri">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <br>
                @if(!isset($search))

                <div class="text-center">
                    <h2>Jelajahi dunia</h2>
                    <p>Lihat di mana orang tinggal, di seluruh Indonesia.</p>
                </div>
                @endif

                <br>
                @if(isset($search))
                <div class="text-center">
                    <h2>Menampilkan hasil pencarian untuk:</h2>
                    <h4>"{{ $search }}"</h4>
                    <hr>
                </div>
                @endif
            
                <div class="row">
                @if (count($rooms) != 0)   
                {{-- <h1>{{  }}</h1>  --}}
                    @foreach($rooms as $room)
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading preview">
                                    <img src="{{ asset("images/rooms/".$room->photos[0]->name) }}">
                                </div>
                                <div class="panel-body">
                                    <div class="row d-flex justify-content-center align-items-center">
                                        <div class="col-md-2">
                                            <img class="img-circle avatar-small" src="{{ Gravatar::get($room->user->email) }}" alt="">
                                        </div>
                                        <div class="col-auto">
                                            <span>
                                                <b style="font-size: 1.2em;">{{ $room->user->fullname }}</b>
                                            </span>
                                        </div>
                                    </div>
                                    <hr>
                                    <h2 style="font-size: 2.5em;"><a href="{{ route('rooms.show', $room) }}">{{ $room->listing_name }}</a></h2>
                                    <h4 style="font-size: 1.0em;">{{ $room->address }}</h4>
                                    <h4>Pesan mulai dari</h4>
                                    <a href="{{ route('rooms.show', $room) }}"><button style="width: 100%; height: auto;" type="button" class="btn btn-success">Rp {{ $room->price }} per Malam</button></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                <div class="text-center">
                    <h2>Listing masih kosong ;(</h2>
                    <br>
                </div>
                @endif
                </div>
            </div>
        </div>
    </div>
@endsection
