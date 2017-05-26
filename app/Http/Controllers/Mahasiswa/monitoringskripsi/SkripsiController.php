<?php 

namespace App\Http\Controllers\Mahasiswa\monitoringskripsi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;

use Illuminate\Http\Request;
use Redirect;
// Tambahkan model yang ingin dipakai
use App\Skripsi;
use App\DosenPembimbing;
use App\BiodataMahasiswa;
use App\BiodataDosen;
use App\KBK;
use Auth;
use DB;

class SkripsiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar skripsi
            'page' => 'skripsi',
            // Memanggil semua isi dari tabel skripsi
            'skripsi' => DB::table('skripsi')
            ->join('dosen_pembimbing', 'skripsi.id_skripsi', '=', 'dosen_pembimbing.skripsi_id')
            ->join('biodata_mhs', 'skripsi.NIM_id', '=', 'biodata_mhs.nim_id')
            ->select('skripsi.*', 'biodata_mhs.nama_mhs','dosen_pembimbing.*')
            ->where('biodata_mhs.nim_id','=', Auth::user()->username)
            ->get(),
            'dosen1' => DB::table('skripsi')
            ->join('dosen_pembimbing', 'skripsi.id_skripsi', '=', 'dosen_pembimbing.skripsi_id')
            ->join('biodata_dosen', 'dosen_pembimbing.nip_id', '=', 'biodata_dosen.nip')
            ->select('skripsi.*', 'biodata_dosen.nama_dosen','dosen_pembimbing.status')
            ->where('dosen_pembimbing.status','=','0')
            ->get(),
            'dosen2' => DB::table('skripsi')
            ->join('dosen_pembimbing', 'skripsi.id_skripsi', '=', 'dosen_pembimbing.skripsi_id')
            ->join('biodata_dosen', 'dosen_pembimbing.nip_id', '=', 'biodata_dosen.nip')
            ->select('skripsi.*', 'biodata_dosen.nama_dosen','dosen_pembimbing.status')
            ->where('dosen_pembimbing.status','=','1')
            ->get(),
            'dospem' => DosenPembimbing::all(),
            'kbk'=> KBK::where('id_kbk', '=', '$skripsi->kbk_id')
        ];
        // Memanggil tampilan index di folder monitoring-skripsi/skripsi dan juga menambahkan $data tadi di view
        return view('mahasiswa.monitoring-skripsi.skripsi.index',$data);
    }

}