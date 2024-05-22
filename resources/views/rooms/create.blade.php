@extends('layouts.app')

@section('title')Tambah Baru @endsection

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            Tambahkan Listing Baru
        </div>
        <div class="panel-body">
            <form action="{{ route('rooms.store') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-4 select">
                        <div class="form-group">
                            <label for="home_type">Tipe Kediaman</label>
                            <select id="home_type" class="form-control" name="home_type" required>
                                <option value=>Pilih Salah Satu</option>
                                <option value="House">Rumah</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Other">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 select">
                        <div class="form-group">
                            <label id="room_type">Tipe Ruangan</label>
                            <select required id="room_type" class="form-control" name="room_type">
                                <option value="Entire">Full Property</option>
                                <option value="Private">Partly Property</option>
                                <option value="Shared">Shared Property</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 select">
                        <div class="form-group">
                            <label for="accommodate">Akomodasi</label>
                            <select required id="accommodate" name="accommodate" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6+</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 select">
                        <div class="form-group">
                            <label for="bed_room"># Kamar Tidur</label>
                            <select required id="bed_room" name="bed_room" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4+</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 select">
                        <div class="form-group">
                            <label for="bath_room"># Kamar Mandi</label>
                            <select required id="bath_room" name="bath_room" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4+</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="listing_name">Nama Listing</label>
                            <textarea required id="listing_name" name="listing_name" class="form-control"
                                      placeholder="Be clear and descriptive"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="summary">Deskripsi</label>
                            <textarea required id="summary" name="summary" class="form-control"
                                      placeholder="Ceritakan singkat tentang listing anda"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea required id="address" name="address" class="form-control"
                                      placeholder="Masukkan alamat anda"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" name="is_tv"> TV
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="is_kitchen"> Dapur
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="is_internet"> Internet
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" name="is_heating"> Heating
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="is_air"> Air Conditioning
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Harga per malam</label>
                            <div class="input-group">
                                <div class="input-group-addon">Rp</div>
                                <input type="number" min="10" name="price" placeholder="eg. Rp1000000" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <span class="btn btn-default btn-file">
                                <i class="fa fa-cloud-upload fa-lg"></i>Upload Foto
                                <input type="file" name="images[]" multiple="multiple">
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="checkbox" name="active"> Aktif?
                        </div>
                    </div>
                </div>

                <div class="actions">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>

            </form>
        </div>
    </div>
@endsection