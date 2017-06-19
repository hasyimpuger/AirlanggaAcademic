@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Jurnal
@endsection

@section('contentheader_title')
Jurnal
@endsection

@section('main-content')

<!-- include summernote css/js-->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach
</div>

<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Halaman Validasi
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="konferensi">Konferensi</a></li>
      <li><a href="penelitian">Penelitian</a></li>
      <li><a href="pengmas">Pengmas</a></li>
    </ul>
  </div>


<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Judul Jurnal</th>      
      <th style="text-align:center">Halaman</th>
      <th style="text-align:center">Bidang Jurnal</th>
      <th style="text-align:center">Tanggal Jurnal</th>
      <th style="text-align:center">Volume</th>
      <th style="text-align:center">Penulis Ke</th>
      <th style="text-align:center">File Jurnal</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($jurnal as $i => $jurnal) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$jurnal->nama_jurnal}}</td>
      <td width="15%" style="text-align:center">{{$jurnal->halaman_jurnal}}</td>
      <td width="20%" style="text-align:center">{{$jurnal->bidang_jurnal}}</td>
      <td width="10%" style="text-align:center">{{$jurnal->tanggal_jurnal}}</td>
      <td width="10%" style="text-align:center">{{$jurnal->volume_jurnal}}</td>
      <td width="10%" style="text-align:center">{{$jurnal->penulis_ke}}</td>
      <td width="20%" style="text-align:center" > <a href="{{URL::asset('/img/dosen/'.$jurnal->file_jurnal)}}" class="btn btn-primary btn-xs">
        <i class="fa fa-pencil-square-o"></i> Download</a> </td>
      <td width="20%" style="text-align:center" ><a href="{{url('/dosen/validasi/jurnal/'.$jurnal->jurnal_id.'/terima/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-pencil-square-o"></i> Terima</a>
        <a href="{{url('/dosen/validasi/jurnal/'.$jurnal->jurnal_id.'/tolak/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i>Tolak</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="10"><center>Belum Ada Jurnal</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
 
@endsection