@extends('layouts.master')
@section('title', 'Informasi Parkir')

@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{route('konfirmasicamp.create')}}" class="btn btn-success">Tambah Data</a><br><br>
                            </div>
                            
                        </div>
                    <div class="table-responsive">
                    
                        <table  class="table table-bordered table-sm table-hover  text-center">
                            <tr  class="bg-info text-white">
                                <th width="20px">NO.</th>
                                <th >Kode Booking</th>
                                <th>Client</th>
                                <th >Tempat Camp</th>
                                <th width="50px">Action</th>
                            </tr>
                            @foreach ($data_konfirmasi_camp as $no => $item)
                                <tr>
                                    <td>{{ $no + 1}}</td>
                                    <td>{{ $item->kode_booking}}</td>
                                    <td>{{ $item->tlp}} - {{ $item->nama}}</td>
                                    <td>
                                        @foreach ($data_campsite->where('id', $item->id_campsite) as $campsite)
                                        {{ $campsite->nama_campsite }}
                                        @endforeach
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </table>
                        
                    </div>
                
                        <div  class=" text-center">
                            page {{$data_konfirmasi_camp->currentPage()}} <br><br>
                            {{ $data_konfirmasi_camp->links() }}
                        
                        </div>
                    
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('page-script')

@endpush
