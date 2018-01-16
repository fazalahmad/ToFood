<?php

namespace App\Http\Controllers\Manual;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\menu_model;
use DB;

class Controller_Menu extends Controller
{

      public function list_menu()
      {
          $menu = DB::table('menu')
            ->leftjoin('detail_menu', 'menu.id_menu','=','detail_menu.id_menu')
            ->select('menu.*','detail_menu.*','menu.id_menu')
            ->get();
            // dd($menu);
          return view('/admin.menu.list_menu', compact('menu') );
      }

      public function menu()
      {
          return view('/admin.menu.add_menu');
      }

      public function menu_post(Request $req)
      {
          // $data = [
          //
          // ];
          $add = new menu_model();
          $add->kategori = $req->f_kategori;
          $add->id_menu = $req->f_id_menu;
          $add->nama_menu = $req->f_nama;
          $add->harga = $req->f_harga;
          $add->save();
          return redirect('/menu')->with('success', 'Menu baru berhasil ditambahkan');
      }

      public function edit($id_menu)
      {
          $edits = menu_model::where('id_menu',$id_menu)->first();
          return view('/admin.menu.edit_menu', compact('edits'));
      }

      public function update(Request $req, $id_menu)
      {
          $data = [
              'kategori' => $req->f_kategori,
              'id_menu'  => $req->f_id_menu,
              'nama_menu' => $req->f_nama,
              'harga'    => $req->f_harga,
          ];
          menu_model::where('id_menu',$id_menu)->update($data);
          return redirect('/menu')->with('success', 'Menu telah diupdate');
      }

      public function delete($id_menu)
      {
          $del = menu_model::where('id_menu',$id_menu);
          return redirect('/menu')->with('success', 'Menu berhasil dihapus');
      }
}
