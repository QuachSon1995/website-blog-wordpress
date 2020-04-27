@extends('backend.layout.master')
@section('title')
    Thêm Danh Mục Sản Phẩm
@endsection()

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chủng Loại</h6>
    </div>
    <div class="row" style="margin:5px">
        <div class="col-lg-12">
            <form role="form" action="{{route('department.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Cach 2 -->
                <!-- <input type="hidden" name="csrf-token" value="{{csrf_token()}}"> -->
                <fieldset class="form-group">
                    <label>Tên Chủng Loại</label>
                    <input class="form-control" name="name" placeholder="Nhập tên chủng loại">
                </fieldset>
                <div class="form-group">
                    <label>Trạng Thái</label>
                    <select class="form-control" name="status">
                        <option value="1">Hiển Thị</option>
                        <option value="0">Không Hiển Thị</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Lưu Lại</button>
                <button type="reset" class="btn btn-primary">Reset Button</button>
            </form>
        </div>
    </div>
</div>
@endsection()