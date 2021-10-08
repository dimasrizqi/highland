@extends('layouts.master')
@section('title', 'Penempatan Camp Pengunjung')

@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <form action="{{ route('konfirmasicamp.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Kode Booking</label>
                                        <input type="text" name="kode_booking" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nomor tlp/handhphone</label>
                                        <input type="text" name="tlp" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Pengunjung</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                                
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Area Camp</label>
                                        
                                        <select class="form-control" name="id_campsite" id="channel_program">
                                           
                                            <option value="">--Alokasikan camp Pengunjung--</option> 
                                            @foreach ($data_campsite as $item)
                                                <option value="{{ $item->id }}"> {{ $item->nama_campsite}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                 
                                <div class="col-md-12">
                                    <div class="card-footer text-left">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                </form>
            </div>

        </div>
    </div>
    </div>
@endsection

@push('page-scripts')

@endpush
