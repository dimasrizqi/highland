@extends('layouts.master')
@section('title', 'Input Parkiran Data')

@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <form action="{{ route('parkiran.store') }}" method="POST">
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
                                        <label>Nomor Plat Kendaraan</label>
                                        <input type="text" name="nopol" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Catatan atau ciri ciri kendaraan</label>
                                        <input type="text" name="ciri" class="form-control">
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
