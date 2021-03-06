@extends('layouts.admin')

@section('title')
  <title>Đăng Ký Phun Thuốc</title>
@endsection

@section('content')
 
 <div class="container">

        <div class="card-body">
            <form action="{{route('pt.store')}}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Ngày Phun Thuốc</strong>
                            <input class="form-control" type="date" name="NgayPhunThuoc" placeholder="mời nhập">
                         
                        </div>
                         <div class="form-group">
                            <strong>Tên Thuốc</strong>
                            <input class="form-control" type="text" name="TenThuoc" placeholder="mời nhập">
                           
                        </div>
                         <div class="form-group">
                            <strong>Liều Lượng</strong> 
                            <input class="form-control" type="text" name="LieuLuong" placeholder="mời nhập">
                           
                        </div>
                         <div class="form-group">
                            <strong>Ghi Chú </strong>
                            <input class="form-control" type="text" name="GhiChu" placeholder="mời nhập">
                           
                        </div>
                      
                         <div class="form-group">
                            <strong>Người Phun Thuốc</strong>
                            <select class="select2_single form-control" name="Nhanvien_ID" aria-label="Default select example">
                           @foreach($nhanvien as $data)
                            <option value="{{$data->id}}"> {{ $data->HoTen }} </option>
                             @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <strong>Khu Vực Phun Thuốc</strong>
                            <select class="select2_single form-control" name="Khu_ID" aria-label="Default select example">
                           @foreach($khu as $data)
                            <option value="{{$data->id}}"> {{ $data->TenKhu }} </option>
                             @endforeach
                            </select>
                        </div>
                        
                    </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Lưu</button></div>
            </form>
        </div>

        </div>
@endsection

