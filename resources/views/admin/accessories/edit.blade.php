@extends('layouts.app')
@section('navbar')
    <div class="container pb-3">@include('admin.include.navbar')</div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập Nhật Phụ Kiện Game</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $huyerror)
                                <li>{{ $huyerror }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('accessories.index') }}" class="btn btn-success">Liệt Kê Phụ Kiện Sản Phẩm</a>
                    <a href="{{ route('accessories.create') }}" class="btn btn-success">Thêm Phụ Kiện Sản Phẩm</a>
                    <div class="pt-4">
                        <form action="{{ route('accessories.update', $accessories->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" value="{{ $accessories->title }}" class="form-control"
                                    placeholder="...">
                            </div>

                            <div class="form-group">
                                <label>Thuộc Loại Game</label>
                                <select class="form-control" name="category_id" required>
                                    @foreach ($category as $key => $huyCategory)
                                        <option {{$huyCategory->id == $accessories->category_id ? 'selected' : 'Không Có'}} value="{{ $huyCategory->id }}">{{ $huyCategory->title }}</option>
                                    @endforeach

                                </select>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        @if ($accessories->status == 1)
                                            <option value="1">Hiển Thị</option>
                                            <option value="0">Không Hiển Thị</option>
                                        @else
                                            <option value="1">Hiển Thị</option>
                                            <option value="0">Không Hiển Thị</option>
                                        @endif
                                    </select>
                                </div>


                                <button type="submit" class="btn btn-primary">Update Phụ Kiện</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
