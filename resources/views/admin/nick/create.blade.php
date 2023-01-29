@extends('layouts.app')
@section('navbar')
    <div class="container pb-3">@include('admin.include.navbar')</div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm Nick Game</div>
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
                    <a href="{{ route('nick.index') }}" class="btn btn-success">Liệt Kê Danh Mục Sản Phẩm</a>
                    <div class="pt-4">
                        <form method="post" enctype="multipart/form-data" action="{{ route('nick.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" required class="form-control" placeholder="...">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" required class="form-control" placeholder="...">
                            </div>
                            {{-- <div class="form-group">
                                <label>Mã Số ACC</label>
                                <input type="text" name="ms" required class="form-control" placeholder="...">
                            </div> --}}
                            <div class="form-group">
                                <label>Hình Ảnh</label>
                                <input type="text" name="image" required class="form-control" placeholder="...">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" required name="status">
                                    <option value="1">Hiển Thị</option>
                                    <option value="0">Không Hiển Thị</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thuộc Loại Game</label>
                                <select class="form-control choose_category" name="category_id">
                                    <option value="0">----- Chọn Game -----</option>
                                    @foreach ($category as $key => $huyCategory)
                                        <option value="{{ $huyCategory->id }}">{{ $huyCategory->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="decs" id="desc_blog" required cols="30" rows="10" placeholder="..." class="form-control"></textarea>
                            </div>

                            {{-- phụ kiện --}}

                            <div id="show_attribute"></div>



                            <button type="submit" class="btn btn-primary">Thêm Danh Mục</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
