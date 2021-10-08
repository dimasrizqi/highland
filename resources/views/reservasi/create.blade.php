@extends('layouts.master')
@section('title', 'Reservasi Data')

@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <form action="{{ route('reservasi.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nomor Telephone/HP/Whatsapp</label>
                                        <input type="text" name="tlp" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Jumlah Orang</label>
                                        <input type="text" name="pax" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Paket</label>
                                        <input type="text" name="paket" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Check In</label>
                                        <input type="date" name="check_in" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Check Out</label>
                                        <input type="date" name="check_out" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tambahan</label>
                                        <input type="text" name="tambahan" class="form-control">
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
