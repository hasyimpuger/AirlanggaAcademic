@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Dosen Rapat
@endsection

@section('contentheader_title')
Dosen Rapat
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
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="{{url('/notulensi/dosenrapat/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Dosen Rapat</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIP</th>
      <th style="text-align:center">ID Notulen</th>      
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($dosenrapat as $i => $dospat) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="40%" style="text-align:center">{{$dospat->nip}}</td>
      <td width="25%" style="text-align:center">{{$dospat->id_notulen}}</td>
      <td width="25%" style="text-align:center" >
        <a onclick="return confirm('Anda yakin untuk menghapus dosen rapat ini?');" href="{{url('/notulensi/dosenrapat/'.$dospat->id.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/notulensi/dosenrapat/'.$dospat->id.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada dosen rapat</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection