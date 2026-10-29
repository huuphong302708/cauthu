<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CauThu;

class CauThuController extends Controller
{
    // danh sách
    public function index()
    {
        $data = CauThu::all();
        return view('cauthu.list', compact('data'));
    }
    // thêm
    public function add()
    {
        return view('cauthu.add');
    }

    public function insert(Request $request)
    {
       $data = $request-> all();
       CauThu::create($data);

       return redirect('/cauthu/list');
    }

    //sửa
    public function edit($id)
    {
        $cau_thu = CauThu::find($id);
        return view('cauthu.edit', compact('cau_thu'));

    }

    public function update(Request $request, $id)
    {
       $cauthu = CauThu::find($id);
       $cauthu->ten_cau_thu = $request->ten_cau_thu;
       $cauthu->tuoi        = $request->tuoi;
       $cauthu->quoc_tich   = $request->quoc_tich;
       $cauthu->vi_tri      = $request->vi_tri;
       $cauthu->luong       = $request->luong;
       $cauthu->save();

       return redirect('/cauthu/list');
    }

    //xoá
    public function delete($id)
    {
       CauThu::destroy($id);

        return redirect('/cauthu/list');
    }
}