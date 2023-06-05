<?php

namespace App\Http\Controllers;

use App\Models\data_penilaian;
use App\Models\Penilaian;
use App\Models\Skala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// class MetodeController extends Controller
// {
//     //

//     public function index() {


//         $metode = DB::table("metode");
//         return view('metode', compact('metode'));
//     }



//     public function proses_hitung(){

//         // @TODO 1 : ambil data keterangan nilai dari database
//         // select * from penilaian (keterangan nilai)
//         $dt_keterangan_nilai = Penilaian::all();


//         // @TODO 2 : ambil data skala
//         $dt_skala = Skala::all();

//         // @TODO 3 : dataset
//         /**
//          * Contoh query
//          *  SELECT 
//                     data_penilaian.ID_Penilaian, datawisata.ID_Wisata, datawisata.Nama_Wisata, 
//                     data_nilailokasi.Nilai_KriteriaLokasi,
//                     data_nilaifasilitas.Nilai_KriteriaFasilitas,
//                     data_nilaikeamanan.Nilai_KriteriaKeamanan,
//                     data_nilaiobjekatraksi.Nilai_KriteriaObjekAtraksi
//                     FROM data_penilaian 

//                 JOIN datawisata ON data_penilaian.ID_Wisata = datawisata.ID_Wisata
//                 JOIN data_nilailokasi ON data_penilaian.ID_Lokasi = data_nilailokasi.ID_Lokasi
//                 JOIN data_nilaifasilitas ON data_penilaian.ID_Fasilitas = data_nilaifasilitas.ID_Fasilitas
//                 JOIN data_nilaikeamanan ON data_penilaian.ID_Keamanan = data_nilaikeamanan.ID_Keamanan
//                 JOIN data_nilaiobjekatraksi ON data_penilaian.ID_ObjekAtraksi = data_nilaiobjekatraksi.ID_ObjekAtraksi
//          */

//         $dataset = data_penilaian::join('datawisata', 'datawisata.ID_Wisata', '=', 'data_penilaian.ID_Wisata')
//             ->join('data_nilailokasi', 'data_nilailokasi.ID_Lokasi', '=', 'data_penilaian.ID_Lokasi')
//             ->join('data_nilaifasilitas', 'data_nilaifasilitas.ID_Fasilitas', '=', 'data_penilaian.ID_Fasilitas')
//             ->join('data_nilaikeamanan', 'data_nilaikeamanan.ID_Keamanan', '=', 'data_penilaian.ID_Keamanan')
//             ->join('data_nilaiobjekatraksi', 'data_nilaiobjekatraksi.ID_ObjekAtraksi', '=', 'data_penilaian.ID_ObjekAtraksi')
//             ->select('data_nilailokasi.*', 'data_nilaifasilitas.*', 'data_nilaikeamanan.*', 'data_nilaiobjekatraksi.*', 'datawisata.*', 'data_penilaian.*');
        

//         // cek apakah memiliki dataset ? 
//         if ( $dataset->count() > 0 ) {

            
//             // boleh melakukan perhitungan
//             $dt_konversi_nilai = array();
//             $total = 0;
//             foreach ( $dataset->get() AS $isi ) {

//                 $nilai_kriteria_lokasi = (int) $isi->Nilai_KriteriaLokasi;
//                 $nilai_fasilitas = (int) $isi->Nilai_KriteriaLokasi;
//                 $nilai_keamanan = (int) $isi->Nilai_KriteriaLokasi;
//                 $nilai_objek = (int) $isi->Nilai_KriteriaLokasi;
                
//                 $convert_kriteria_lokasi = $this->konversi_data_penilaian($nilai_kriteria_lokasi, $dt_keterangan_nilai);
//                 $convert_fasilitas = $this->konversi_data_penilaian($nilai_fasilitas, $dt_keterangan_nilai);
//                 $convert_keamanan = $this->konversi_data_penilaian($nilai_keamanan, $dt_keterangan_nilai);
//                 $convert_objek = $this->konversi_data_penilaian($nilai_objek, $dt_keterangan_nilai);

//                 // perhitungan s 
//                 $s_lokasi = $this->mencari_nilai_s($convert_kriteria_lokasi, "Kriteria Lokasi");
//                 $s_fasilitas = $this->mencari_nilai_s($convert_fasilitas, "Kriteria Fasilitas");
//                 $s_keamanan  = $this->mencari_nilai_s($convert_keamanan, "Kriteria Keamanan");
//                 $s_objek  = $this->mencari_nilai_s($convert_objek, "Kriteria Objek Atraksi");


//                 $vektor_s = $s_lokasi * $s_fasilitas * $s_keamanan * $s_objek;
                
//                 // konversi nilai ke data_penilaian
//                 // echo "<h2>$isi->ID_Penilaian hasil s : $nilai_s_keseluruhan</h2>";
//                 // echo number_format($s_lokasi, 10).". ; $s_fasilitas ; $s_keamanan ; $s_objek";
//                 $isi->convert_kriteria_lokasi = $convert_kriteria_lokasi;
//                 $isi->convert_fasilitas = $convert_fasilitas;
//                 $isi->convert_keamanan = $convert_keamanan;
//                 $isi->convert_objek = $convert_objek;

//                 $isi->s_lokasi = $s_lokasi;
//                 $isi->s_fasilitas = $s_fasilitas;
//                 $isi->s_keamanan = $s_keamanan;
//                 $isi->s_objek = $s_objek;
//                 $isi->vektor_s = $vektor_s;

//                 // $total += $nilai_s_keseluruhan;
//                 $total = $total + $vektor_s;

//                 array_push( $dt_konversi_nilai, $isi );
                
//             }



//             // perhitungan vektor v dan vektor s
//             $dt_keseluruhan = array();
//             foreach ( $dt_konversi_nilai AS $isi ) {

//                 // mencari nilai vektor s 
//                 $vektor_s = $isi->vektor_s;
//                 $vektor_v = $vektor_s / $total;

//                 $isi->vektor_v = $vektor_v;
//                 array_push( $dt_keseluruhan, $isi );

//                 // echo "<h2>$isi->ID_Penilaian vektor : ".number_format($vektor_v, 9)."</h2>";
//             } 



          
//             $original_data = $dt_keseluruhan; // data perhitungan sebelum diurutkan
            
//             // fungsi sorting desc
//             usort($dt_keseluruhan, function($a, $b) {
//                 return $b->vektor_v <=> $a->vektor_v;
//             });



//             $origin_json = json_encode( $original_data );
//             $sorting_json = json_encode( $dt_keseluruhan );
//             $data = array(

//                 'origin'    => $origin_json,   
//                 'data_json' => $sorting_json
//             );

//             DB::table("metode")->insert($data);
//             return redirect('metode');



//             // print_r( $dt_konversi_nilai );
//         } else {

//             echo "Anda tidak memiliki dataset";
//         }

        
//     }



//     // data penilaian
//     function konversi_data_penilaian( $nilai_kriteria_lokasi, $dt_keterangan_nilai ) {

//         $bobot = "";

//         foreach ( $dt_keterangan_nilai AS $isi ) {

//             $nilai_range = $isi->Range_Nilai;
//             // pisah 
//             $range = explode("-", $nilai_range);
//             $rangeAwal = (int) $range[0];
//             $rangeAkhir = (int) $range[1];

//             // if ( 0 < 33 && 33 < 49 )
//             if ( ($rangeAwal <= $nilai_kriteria_lokasi) && ($nilai_kriteria_lokasi <= $rangeAkhir) ){

//                 $bobot = $isi->Bobot_Nilai;
//                 break;
//             }
//         }

//         return $bobot;
//     }

//     // mencari nilai s
//     function mencari_nilai_s( $nilai, $jenis ) {

//         // SELECT * FROM skala_penilaian WHERE Jenis_Kriteria = 'jenis'
//         $dt_skala_jenis = Skala::where("Jenis_Kriteria", $jenis)->first();

//         // pangkat
//         $pangkat = (float) $dt_skala_jenis->Bobot_Penilaian;
//         $hasil = pow($nilai, $pangkat);

//         return $hasil;
//     }

//     function reset() {

//         DB::table('metode')->truncate();

//         return redirect('metode');
//    }

