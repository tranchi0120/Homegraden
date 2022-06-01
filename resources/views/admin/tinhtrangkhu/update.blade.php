@extends('layouts.admin')

@section('title')
  <title>Cập Nhật</title>
@endsection

@section('content')
 
 <div class="container">
        <div class="card-body">
            <form action="{{route('tinhtrang.update',$name->id)}}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                      
                        {{-- <div class="form-group">
                            <strong>Hình Ảnh</strong>
                            <input class="form-control" type="text" name="HinhAnh" value="{{$name->HinhAnh}}">
                           
                        </div> --}}

                         <div class="form-group  ">
                            <Strong class="col-sm-3 text-end control-label col-form-label">Hình Ảnh </Strong>
                            <div class="custom-file">
                                <input name="HinhAnh"  type="file" name="myImage" accept="image/*" />
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Ghi Chú</strong>
                            <input class="form-control" type="text" name="GhiChu" value="{{$name->GhiChu}}">
                           
                        </div>
                       
                       
                    </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Cập Nhật</button></div>
            </form>
        </div>

    </div>
@endsection
