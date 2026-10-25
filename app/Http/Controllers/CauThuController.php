<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class CauThuController extends Controller
{
    // danh sách
    public function index()
    {
        $danh_sach = DB::table('cauthu')->get();
        return view('cauthu.list', compact('danh_sach'));
    }
    // thêm
    public function add()
    {
        return view('cauthu.add');
    }

    public function insert(Request $request)
    {
        DB::table('cauthu')->insert([
            'ten_cau_thu' => $request->ten_cau_thu,
            'tuoi'        => $request->tuoi,
            'quoc_tich'   => $request->quoc_tich,
            'vi_tri'      => $request->vi_tri,
            'luong'       => $request->luong,
            'created_at'  => now(),
            'updated_at'  => now()
        ]);

        $danh_sach = DB::table('cauthu')->get();
        return view('cauthu.list', compact('danh_sach'));
    }

    //sửa
    public function edit($id)
    {
        $cau_thu = DB::table('cauthu')->where('id', $id)->first();
        return view('cauthu.edit', compact('cau_thu'));
    }
    
    public function update(Request $request, $id)
    {
        DB::table('cauthu')->where('id', $id)->update([
            'ten_cau_thu' => $request->ten_cau_thu,
            'tuoi'        => $request->tuoi,
            'quoc_tich'   => $request->quoc_tich,
            'vi_tri'      => $request->vi_tri,
            'luong'       => $request->luong,
            'updated_at'  => now()
        ]);

       $danh_sach = DB::table('cauthu')->get();
       return view('cauthu.list', compact('danh_sach'));
    }

    //xoá
    public function delete($id)
    {
        DB::table('cauthu')->where('id', $id)->delete();

        $danh_sach = DB::table('cauthu')->get();
        return view('cauthu.list', compact('danh_sach'));
    }
}