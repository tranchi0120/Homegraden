@extends('layouts.admin')

@section('title')
    <title>Danh mục Tài Khoản</title>
@endsection

@section('content')
    <div class="container">

        <div class="card-body">
            <form action="{{ route('u.store') }}" method="post">
                @csrf


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Họ Và tên</strong>
                            <input class="form-control" type="text" name="name" placeholder="mời nhập">

                        </div>
                        <div class="form-group">
                            <strong>Email</strong>
                            <input class="form-control" type="email" name="email" placeholder="mời nhập">

                        </div>
                        <div class="form-group">
                            <strong>mật khẩu</strong>
                            <input class="form-control" type="password" name="password" placeholder="mời nhập">

                        </div>

                        <div class="form-group">
                            <strong>Số điện thoại</strong>
                            <input class="form-control" type="text" name="sdt" placeholder="mời nhập">
                        </div>
                        <div class="form-group">
                            <strong>Quyền</strong>
                            <select class="select2_single form-control" name="Quyen_ID" aria-label="Default select example">
                                <option> --chọn quyền-- </option>
                                @foreach ($quyen as $data)
                                    <option value="{{ $data->id }}"> {{ $data->TenQuyen }} </option>
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
