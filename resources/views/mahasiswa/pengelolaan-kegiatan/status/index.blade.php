 @extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Status Kegiatan
@endsection

@section('contentheader_title')
Status Kegiatan
@endsection

@section('main-content')
<!-- include summernote css/js-->

<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Kegiatan</th>
      <th style="text-align:center">Kategori Kegiatan</th>
      <th style="text-align:center">Konfirmasi Kegiatan</th>
      <th style="text-align:center">Latar Belakang</th>      
      <th style="text-align:center">Tujuan Kegiatan</th>
      <th style="text-align:center">Mekanisme Kegiatan</th>
      <th style="text-align:center">Tanggal Pengajuan</th>
      <th style="text-align:center">Tanggal Pelaksanaan</th>
      <th style="text-align:center">Poster</th>
      <th style="text-align:center">Action</th>

    </tr>
    </thead>
  <tbody>
   @forelse($Status as $i => $pen) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$pen->nama}}</td>
      <td width="15%" style="text-align:center">{{$pen->kategori}}</td>
      <td width="15%" style="text-align:center">{{$pen->konfirmasi}}</td>
      <td width="20%" style="text-align:center">{{$pen->history}}</td>
      <td width="10%" style="text-align:center">{{$pen->tujuan}}</td>
      <td width="10%" style="text-align:center">{{$pen->mekanisme}}</td>
      <td width="10%" style="text-align:center">{{$pen->tglpengajuan}}</td>
      <td width="10%" style="text-align:center">{{$pen->tglpelaksanaan}}</td>
      <td width="10%" style="text-align:center">{{$pen->url_poster}}</td>
      <td width="20%" style="text-align:center">
        <a href="{{url('/pengelolaan-kegiatan/pengajuan/'.$pen->id.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Pengajuan Kegiatan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection