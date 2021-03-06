<?php

namespace App\Http\Controllers;

use App\Models\Danhmucloaicay as ModelsDanhmucloaicay;
use Illuminate\Http\Request;

class Danhmucloaicay extends Controller
{
    public function __construct()
    {
         $danhmucloaicay = ModelsDanhmucloaicay::all();
        view()->share('danhmucloaicay',$danhmucloaicay);
        
    }
         public function index()
         {
         
             return view('danhmucloaicay.index');
         }
         public function create(){
             return view('danhmucloaicay.create');
         }
         public function store(Request $request){
             $tenloaicay = new ModelsDanhmucloaicay();
             $tenloaicay->Tenloaicay = $request->Tenloaicay;
             $tenloaicay->save();
             return redirect()->route('admin.danhmucloaicay')->with('thongbao','Thêm thành công');
         }
        public function edit($id)
        {
          $name = ModelsDanhmucloaicay::find($id);
        return view('danhmucloaicay.update',compact('name'));

        }
        public function update(Request $request,$id)
        {
            $name = ModelsDanhmucloaicay::find($id);// cái name trong ni gọi tới update nè m dặt tên khác thì bên update cũng phải tên khác
             $name->Tenloaicay = $request->input('Tenloaicay');
             $name->update();
             return redirect()->route('admin.danhmucloaicay')->with('thongbao','Chỉnh sửa thành công');
            

        }
         public function destroy($id)
    {
           $danhmucloaicay = ModelsDanhmucloaicay::find($id);
           $danhmucloaicay->delete();
      return redirect()->route('admin.danhmucloaicay');
    }
}