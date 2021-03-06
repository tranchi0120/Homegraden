
@extends('layouts.admin')

@section('title')
  <title>Danh Mục phun Thuốc</title>
@endsection

@section('content')
    <div class="container">       
        <table class="table table-striped">
            <tr class="table-dark">
                {{-- <th>ID</th> --}}
                <th>Ngày Phun Thuốc</th>
                <th>Tên Thuốc</th>
                <th>Liều Lượng</th>
                  <th>Ghi Chú</th>
                <th>Người Phun Thuốc</th>
                <th>Khu Vực Phun Thuốc</th>
                <th width="280px">Hành động</th>
            </tr>
             @foreach ($phunthuoc as $data)
                <tr>
                    {{-- <td>{{ $data->id }}</td> --}}
                    <td>{{ $data->NgayPhunThuoc }}</td>
                    <td>{{ $data->TenThuoc }}</td> 
                    <td>{{ $data->LieuLuong }}</td>
                    <td>{{ $data->GhiChu }}</td>
                    <td>{{ $data->NhanVien->HoTen }}</td>
                    <td>{{ $data->Khu->TenKhu}}</td>
                   
                    <td>
                        <a class="btn btn-primary" href="{{route('pt.edit',$data->id)}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        @csrf
                        <a href="{{route('pt.destroy',$data->id)}}" class="btn btn-danger action_delete">
                            <i class="fas fa-trash"></i>
                        </a>
                        </form>
                    </td>

                </tr>
            @endforeach
     
        </table>

        {{-- <div >
            <span>Phiếu Phun Thuốc</span>
            <div class="forms">
                <Strong id="title-show">Ngày Phun Thuốc</Strong>
                 @foreach ($phunthuoc as $data)
                <p>{{ $data->NgayPhunThuoc }}</p>
                @endforeach
            </div>
        </div> --}}
    </div>





@endsection