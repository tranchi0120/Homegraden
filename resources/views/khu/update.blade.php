@extends('layouts.admin')

@section('title')
  <title>Danh Mục Khu</title>
@endsection

@section('content')
 
 <div class="container">

        <div class="card-body">
            <form action="{{route('k.update',$name->id)}}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Tên Khu</strong>
                            <input class="form-control" type="text" name="TenKhu" value="{{$name->TenKhu}}">
                           
                        </div>
                        <div class="form-group">
                            <strong>Trạng Thái</strong>
                            <input class="form-control" type="text" name="TrangThai" value="{{$name->TrangThai}}">
                           
                        </div>
                        <div class="form-group">
                            <strong>Số Lượng </strong>
                            <input class="form-control" type="number" name="SoLuong" value="{{$name->SoLuong}}">
                           
                        </div>
                        <div class="form-group">
                            <strong>Ngày Trồng </strong>
                            <input class="form-control" type="date" name="NgayTrongCay" value="{{$name->NgayTrongCay}}">
                           
                        </div>
                         <div class="form-group">
                            <strong>Ngày Thu </strong>
                            <input class="form-control" type="date" name="NgayThuHoach" value="{{$name->NgayThuHoach}}">
                           
                        </div>
                         <div class="form-group">
                            <strong>Ghi Chú </strong>
                            <input class="form-control" type="text" name="GhiChu" value="{{$name->GhiChu}}">  
                        </div>
                        <div class="form-group">
                            <strong>Người Chăm Cây</strong>
                            <select class="select2_single form-control" name="Nhanvien_ID" aria-label="Default select example">
                           {{-- <option>Tên</option> --}}
                           @foreach($taikhoan as $data)
                            <option value="{{$data->id}}"> {{ $data->HoTen }} </option>
                          @endforeach
                            </select>
                        </div>
                        

                        <div class="form-group">
                            <strong>Tên Cây Trồng</strong>
                            <select class="select2_single form-control" name="Caytrong_ID" aria-label="Default select example">
                           {{-- <option>Tên Cây Trồng</option> --}}
                           @foreach($caytrong as $data)
                            <option value="{{$data->id}}"> {{ $data->TenCay }} </option>
                          @endforeach
                            </select>
                        </div>
                        
                    </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Cập Nhật</button></div>
            </form>
        </div>

        </div>
@endsection

