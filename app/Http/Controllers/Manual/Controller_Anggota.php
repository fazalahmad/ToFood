<?php

namespace App\Http\Controllers\Manual;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\anggota_model;
use App\Model\jam_kerja_model;
use DB;

class Controller_Anggota extends Controller
{

      public function list_anggota()
      {
          // $petugas = anggota_model::all()->jam_kerja()-where('kelamin','laki_laki')->get();
          // $petugas = anggota_model::find(2)->kerja;
          // $petugas = anggota_model::find([2,3,4]); //index
          // $petugas = anggota_model::where('kelamin', 'perempuan')
          // ->orderBy('nama', 'desc') //desc, asc
          // ->take(2) //how many record
          // ->get();
          // $petugas = anggota_model::where('id_petugas', '=', 'MMK01')->get();

          //query builder :
          // $petugas = DB::table('petugas')->get(); //Retrieving All
          // $petugas = DB::table('petugas')->where('kelamin', 'perempuan')->get();
          // $petugas = DB::table('petugas')->count();
          $petugas = DB::table('petugas')
          ->join('jam_kerja', 'petugas.id_petugas', '=', 'jam_kerja.id_petugas')
          ->select('petugas.*','shift')
          ->get();

          // dd($petugas);

          return view('admin.anggota.list_anggota')->with('list', $petugas);
          // return view('admin.anggota.list_anggota', compact('petugas'));
          // return view('admin.anggota.list_anggota', ['list' => $petugas]);

      }

      public function add_anggota()
      {
          return view('/admin.anggota.tambah_anggota');
      }

      public function anggota_post(Request $req)
      {
          $add = new anggota_model();
          $add->id_petugas  = $req->f_id_petugas;
          $add->nama        = $req->f_nama;
          $add->kelamin     = $req->f_kelamin;
          $add->alamat      = $req->f_alamat;
          $add->no_hp       = $req->f_no_hp;
          // return view('/admin.anggota.jam_kerja')->with('id',$add->id_petugas);

          $add2 = new jam_kerja_model();
          $add2->id_petugas = $req->f_id_petugas;
          $add2->shift      = $req->f_shift;

          $add->save();
          $add2->save();
          return redirect('/petugas')->with('success','Petugas dengan nama '.$req->f_nama. ' sudah terdaftar');
      }

      public function edit($id_petugas)
      {
          $edits = anggota_model::where('id_petugas', $id_petugas)->first();
          return view('/admin.anggota.edit_anggota', compact('edits'));
      }

      public function update(Request $req, $id_petugas)
      {
          $data_p = [
              'id_petugas' => $req->f_id_petugas,
              'nama'       => $req->f_nama,
              'kelamin'    => $req->f_kelamin,
              'alamat'     => $req->f_alamat,
              'no_hp'      => $req->f_no_hp,
          ];

          $data_m = [
              'id_petugas' => $req->f_id_petugas,
              'shift'      => $req->f_shift,
          ];
          anggota_model::where('id_petugas',$id_petugas)->update($data_p);
          jam_kerja_model::where('id_petugas',$id_petugas)->update($data_m);
          return redirect('/petugas')->with('success', 'Data Petugas '.$req->id_petugas.' berhasil di update');

      }
}
