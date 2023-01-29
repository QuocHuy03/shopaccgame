@extends('layouts.app')
@section('navbar')
    <div class="container pb-3">@include('admin.include.navbar')</div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt Kê Slider</div>
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
                        <div class="alert alert-success p-5" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('slider.index') }}" class="btn btn-success">Liệt Kê Slider Sản Phẩm</a>
                    <div class="pt-4">
                        <form method="post" enctype="multipart/form-data" action="{{ route('slider.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="...">
                            </div>

                            <div class="form-group">
                                <label>Hình Ảnh</label>
                                <input type="text" name="image" class="form-control" placeholder="...">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="1">Hiển Thị</option>
                                    <option value="0">Không Hiển Thị</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="" cols="30" rows="10" placeholder="..." class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm Slider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
