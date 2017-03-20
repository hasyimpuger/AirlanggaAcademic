<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichRoute::get('/', function () {
    return view('welcome');
});
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {  
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

	Route::get('/approve', function () {
    return view('krs-khs/approve');
});
	Route::get('/approve1', function () {
    return view('krs-khs/approve1');
});

	Route::get('/buka', function () {
    return view('krs-khs/buka');
});

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
<<<<<<< HEAD
   
    Route::get('/dosen/laporan/laporan', function () {
    return view('dosen.laporan.laporan');
});
    Route::get('/dosen/laporan/isilaporan', function () {
    return view('dosen.laporan.isilaporan');
     
});
    
});
=======

    Route::get('/pla/permohonansurat', function () {
    return view('pla.permohonansurat');

});

    Route::get('/krs-khs/input_ruang', function () {
    return view('krs-khs/input_ruang');

});

        Route::get('/krs-khs/input_jadwal', function () {
    return view('krs-khs/input_jadwal');
});
        

    Route::get('/dosen/pengabdianmasyarakat', function () {
    return view('dosen.pengabdianmasyarakat');
    });
    Route::get('/dosen/pengmas/pengmas', function () {
    return view('dosen.pengmas.pengmas');
});
    Route::get('kurikulum/rps/index', function () {
    return view('kurikulum.rps.index');
});
    Route::get('kurikulum/detail-rps', function () {
    return view('kurikulum.rps.index-rps');
});
    Route::get('kurikulum/tambah-rps', function () {
    return view('kurikulum.rps.index-add-rps');
});   


    Route::get('/pla/permohonan_ruangan_user', function () {
    return view('pla.permohonan_ruangan_user');
});



    Route::get('/dosen/penelitian/penelitian',function()
{ return view('dosen.penelitian.penelitian'); 
});

     Route::get('/monsi/form-editskripsi', function () {
    return view('monsi.form-editskripsi');
});
     Route::get('/monsi/form-viewskripsi', function () {
    return view('monsi.form-viewskripsi');
});
     Route::get('/monsi/form-viewskripsi', function () {
    return view('monsi.form-viewskripsi');
});

    
    Route::get('/dosen/jurnal/', function () {
    return view('dosen.jurnal.jurnal');
});
    Route::get('/dosen/jurnal/create', function () {
    return view('dosen.jurnal.create');
});
    Route::get('/dosen/jurnal/edit', function () {
    return view('dosen.jurnal.edit');
});
    
    

Route::get('/dosen/penelitian/create',function()
{ return view('dosen.penelitian.create'); 
});
Route::get('/dosen/penelitian/edit',function()
{ return view('dosen.penelitian.edit'); 
});


    Route::get('/krs-khs/form_khs', function () {
    return view('krs-khs.form_khs');
    });
    Route::get('/krs-khs/histori_nilai', function () {
    return view('krs-khs.histori_nilai');
    });
    Route::get('/krs-khs/detail_nilai_RPL', function () {
    return view('krs-khs.detail_nilai_RPL');
    });
    Route::get('/krs-khs/detail_nilai_BD', function () {
    return view('krs-khs.detail_nilai_BD');
    });
    Route::get('/krs-khs/krs', function () {
    return view('krs-khs/contoh');
    });
     
    

    
    Route::get('/monsi/form-dataskripsi', function () {
    return view('monsi.form-dataskripsi');
  	});
  	


    Route::get('add-asset', 'HomeController@input');
    Route::get('view-asset', 'HomeController@index');

    Route::get('/krs-khs/krs', function () {
    return view('krs-khs/contoh');
    });
    Route::get('/monsi/form-dataskripsi', function () {
    return view('monsi.form-dataskripsi');
    });
    Route::get('/dosen/penelitian', function () {
    return view('dosen.penelitian.create');
    });
    Route::get('/dosen/konferensi/konferensi', function () {
    return view('dosen.konferensi.konferensi');
	}); 
     Route::get('/dosen/konferensi/create', function () {
    return view('dosen.konferensi.create');
	}); 
	Route::get('/dosen/konferensi/edit', function () {
    return view('dosen.konferensi.edit');
    });
    Route::get('/monsi/form_uploadskripsi', function () {
    return view('monsi.form_uploadskripsi');
    });
    Route::get('/monsi/tabel_judul', function () {
    return view('monsi.tabel_judul');
    });
    Route::get('/monsi/download_file', function (){
    return view('monsi.download_file');
    });
    Route::get('/monsi/notif_uploadberhasil', function (){
    return view('monsi.notif_uploadberhasil');
    });
    Route::get('/monsi/notif_uploadgagal', function (){
    return view('monsi.notif_uploadgagal');
    });
    Route::get('/monsi/upload-bimbingan', function () {
    return view('monsi.upload-bimbingan');
    });
    Route::get('/monsi/view-bimbingan', function () {
    return view('monsi.view-bimbingan');
    });
    Route::get('/monsi/tabel-mhs2', function () {
    return view('monsi.tabel-mhs2');
    });
    Route::get('/monsi/tabel-mhs', function () {
    return view('monsi.tabel-mhs');
    });
    Route::get('/monsi/form-viewskripsi', function () {
    return view('monsi.form-viewskripsi');
    });

    Route::get('input-maintenance', 'MaintenanceController@inputMaintenance');
    Route::get('index-maintenance', 'MaintenanceController@index');
    Route::get('view-maintenance', 'MaintenanceController@viewDetail');

    Route::get('input-peminjaman', 'PeminjamanController@inputPeminjaman');
    Route::get('index-peminjaman', 'PeminjamanController@index');
    Route::get('view-peminjaman', 'PeminjamanController@viewDetail');

    Route::get('add-asset', 'HomeController@input');
    Route::get('view-asset', 'HomeController@index');

    Route::get('input-peminjaman', 'PeminjamanController@inputPeminjaman');
    Route::get('index-peminjaman', 'PeminjamanController@index');
    Route::get('view-peminjaman', 'PeminjamanController@viewDetail');



     Route::get('/monsi/sidang_proposal', function () {
    return view('monsi.sidang-proposal');

    });

     Route::get('/monsi/sidang_skripsi', function () {
    return view('monsi.sidang-skripsi');

    });

      Route::get('/monsi/jadwal_sidang_proposal_mhs', function () {
    return view('monsi.lihat-jadwal-sidang-proposal');

    });

       Route::get('/monsi/jadwal_sidang_proposal_dosen', function () {
    return view('monsi.lihat-jadwal-sidang-proposal-dosen');

    });

         Route::get('/monsi/jadwal_sidang_skripsi_mhs', function () {
    return view('monsi.lihat-jadwal-sidang-skripsi');

    });

          Route::get('/monsi/jadwal_sidang_skripsi_dosen', function () {
    return view('monsi.lihat-jadwal-sidang-skripsi-dosen');

    });


    Route::get('/dosen/pengmas/edit', function () {
    return view('dosen.pengmas.edit');
});
    Route::get('/dosen/pengmas/create', function () {
    return view('dosen.pengmas.create');

});

});


>>>>>>> ea7138f61680371be6328adb72ddcdcad47c69a9
