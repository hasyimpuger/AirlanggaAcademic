@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Detail Rapat
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Undang Dosen
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
            <div class="box-header with-border">
              <h3 class="box-title">Undang Dosen</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="textNamaRapat" class="col-sm-2 control-label">Nama Rapat</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="textNamaRapat" placeholder="Nama rapat disini" value="{{ $form->nama_rapat }}" readonly type="text" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="textTanggalRapat" class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="textTanggalRapat" placeholder="Tanggal pelaksanaan rapat disini" value="{{ $form->waktu_pelaksanaan }}" readonly type="text" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="textTempatRapat" class="col-sm-2 control-label">Tempat</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="textTempatRapat" placeholder="Tempat pelaksanaan rapat disini" value="{{ $form->permohonan_ruang_id }}" readonly type="text" >
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="selectDosen" class="col-sm-2 control-label">Pilih Jabatan Dosen</label>
                  <div class="col-sm-10">
                  <select class="form-control">
                    <option>Dosen BPH Inti</option>
                    <option>Pembantu BPH</option>
                    <option>Dosen Biasa</option>
                    <option>Semua Dosen</option>
                    <option>Lainnya</option>
                  </select>
                </div>
                  </div> -->
         <!-- <div class="col-xs-14">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Dosen</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>No</th>
                  <th>Nama Dosen</th>
                  <th>NIP</th>
                  <th>Jabatan</th>
                  <th>Keterangan</th>
                </tr>
                <tr>
                  <td>001</td>
                  <td>Badrus Zaman, S.Kom., M.Cs.</td>
                  <td>19780126 200604 1 001</td>
                  <td>Kaprodi</td>
                  <td><div class="checkbox">
                      <label>
                        <input type="checkbox">
                      </label>
                    </div></td>

                </tr>
                <tr>
                  <td>002</td>
                  <td>Barry Nuqoba, S.Si, M.Kom.</td>
                  <td>19841102 201212 1 002</td>
                  <td>Dosen</td>
                  <td><div class="checkbox">
                      <label>
                        <input type="checkbox">
                      </label>
                    </div></td>

                </tr>
                <tr>
                  <td>003</td>
                  <td>Army Justitia, S.Kom, M.Kom.</td>
                  <td>19870625 201212 2 002</td>
                  <td>Dosen</td>
                  <td><div class="checkbox">
                      <label>
                        <input type="checkbox">
                      </label>
                    </div></td>

                </tr>
                <tr>
                  <td>004</td>
                  <td>Faried Effendy, S.Si., M.Kom.</td>
                  <td>19820606 200710 1 001</td>
                  <td>Dosen</td>
                  <td><div class="checkbox">
                      <label>
                        <input type="checkbox">
                      </label>
                    </div></td>

                </tr>
              </table>
            </div>
            
          </div>
          
        </div>
                
              </div> -->
              
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Kirim Undangan</button>
              </div>
            </form>
@endsection

@section('code-footer')




@endsection