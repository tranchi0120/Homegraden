@extends('layouts.admin')

@section('title')
  <title>Thêm Cây Trồng</title>
@endsection

@section('content')
 
 <div class="container">
   
        <div class="card-body">
            <form action="{{route('ct.store')}}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                       

                        <div class="form-group">
                            <strong>Loại Cây</strong>
                            <select class="select2_single form-control" name="Loaicay_ID" aria-label="Default select example">
                           <option>Loại Cây</option>
                           @foreach($danhmucloaicay as $data)
                            <option value="{{$data->id}}"> {{ $data->Tenloaicay }} </option>
                          @endforeach
                            </select>
                        </div>
                         <div class="form-group">
                            <strong>Tên Cây</strong>
                            <input class="form-control" type="text" name="TenCay" placeholder="mời nhập">
                           
                        </div>
                         <div class="form-group  ">
                            <Strong class="col-sm-3 text-end control-label col-form-label">Hình Ảnh </Strong>
                            <div class="custom-file">
                                <input name="HinhAnh"  type="file" name="myImage" accept="image/*" />
 
                            </div>
                        </div>
                         <div class="form-group">
                            <strong>Số Lượng</strong>   
                            <input class="form-control" type="number" name="SoLuong" placeholder="mời nhập">
                            
                        </div>
                         <div class="form-group">
                            <strong>Giai đoạn phun thuốc</strong>
                            <input class="form-control" type="editor" name="GiaiDoanPhunThuoc" placeholder="mời nhập">
                        <div class="col-md-12 col-sm-12 ">
				
						
						</div>
					
					</div>
                      

                    </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Lưu</button></div>
            </form>
        
    </div>

        </div>
@endsection

