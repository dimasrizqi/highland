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
                                <a href="{{route('reservasi.create')}}" class="btn btn-success">Tambah Data</a><br><br>
                            </div>
                            
                            <div class="col-6 text-right">
                                <form action="" method="GET" class="search-element">
                                	<input type="text" name="cari" placeholder="Cari Nama .." value="{{ old('cari') }}">
                                	
                                	<button class="btn" type="submit" "><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    <div class="table-responsive">
                    
                        <table  class="table table-bordered table-sm table-hover  text-center">
                            <tr  class="bg-info text-white">
                                <th width="20px">NO.</th>
                                <th >Kode Booking</th>
                                <th>Nopol</th>
                                <th >Ciri Ciri Kendaraan</th>
                                <th width="50px">Action</th>
                            </tr>
                            @foreach ($data_reservasi as $no => $item)
                                <tr>
                                    <td>{{ $no + 1}}</td>
                                    <td>{{ $item->kode_booking}}</td>
                                    <td>{{ $item->id_campsite}}</td>
                                    <td>{{ $item->id_campsite_blok_site}}</td>
                                    <td>
                                         <form action="{{ route('reservasi.destroy',$item->id) }}" method="POST">
                                         @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus Data?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                        
                    </div>
                
                        <div  class=" text-center">
                            page  <br><br>
                        </div>
                    
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('page-script')

@endpush
