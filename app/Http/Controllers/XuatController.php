<?php

namespace App\Http\Controllers;
use App\Models\Xuat as ModelsXuat;
use Illuminate\Http\Request;
use App\Models\Khu;
use App\Models\User;


class XuatController extends Controller
{



    public function __construct()
    {
        
        $khu = Khu::all();
        view()->share('khu',$khu);

          $user = User::all();
        view()->share('user',$user);
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xuat = ModelsXuat::all();
        return view('admin/xuat.index')->with('xuat',$xuat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/xuat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $xuat = ModelsXuat::all();
        $name = new ModelsXuat();
        $name->Khu_ID = $request->Khu_ID;
        $name->User_ID = $request->User_ID;
        $name->NgayXuat = $request->NgayXuat;
        $name->SoLuong = $request->SoLuong;
        $name->GiaXuat = $request->GiaXuat;
        $name->TongTien = $request->TongTien;
        $name->GhiChu = $request->GhiChu;
        $name->save();
        return redirect()->route('admin.xuat')->with('xuat', $xuat);
    }

    
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quyen = ModelsXuat::find($id);
           $quyen->delete();
        return redirect()->route('admin.xuat');
    }
}