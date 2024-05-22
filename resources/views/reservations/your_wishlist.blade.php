@extends('layouts.app')

@section('title')Profil @endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Wishlist
                </div>
                <div class="panel-body">
                    <div class="row" style="margin-bottom: 20px">
                        <div class="col-md-6">Nama</div>
                        <div class="col-md-6">Image</div>
                    </div>
                    @foreach($wishlists as $wishlist)
                        <div class="row">
                            <div class="col-md-6">
                                {{ $wishlist->room->listing_name }}
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('rooms.show', $wishlist->room->id) }}">
                                    <img class="img-responsive" style="width: 150px"
                                         src="{{ asset("images/rooms/".$wishlist->room->photos[0]->name) }}">
                                </a>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection