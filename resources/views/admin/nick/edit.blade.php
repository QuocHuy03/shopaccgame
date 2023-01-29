@extends('layouts.app')
@section('navbar')
    <div class="container pb-3">@include('admin.include.navbar')</div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập Nhật Nick Game</div>
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
                    <a href="{{ route('nick.index') }}" class="btn btn-success">Liệt Kê Nick</a>
                    <a href="{{ route('nick.create') }}" class="btn btn-success">Thêm Nick</a>
                    <div class="pt-4">
                        <form action="{{ route('nick.update', $nick->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" required name="title" value="{{ $nick->title }}"
                                    class="form-control" placeholder="...">
                            </div>
                            <div class="form-group">
                                <label>Mã Số</label>
                                <input type="text" required name="ms" value="{{ $nick->ms }}"
                                    class="form-control" placeholder="...">
                            </div>
                            <div class="form-group">
                                <label>Giá Tiền</label>
                                <input type="text" name="price" required value="{{ $nick->price }}"
                                    class="form-control" placeholder="...">
                            </div>
                            <div class="form-group">
                                <label>Hình Ảnh</label>
                                <input type="text" required name="image" value="{{ $nick->image }}"
                                    class="form-control" placeholder="...">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" required name="status">
                                    @if ($nick->status == 1)
                                        <option value="1">Hiển Thị</option>
                                        <option value="0">Không Hiển Thị</option>
                                    @else
                                        <option value="1">Hiển Thị</option>
                                        <option value="0">Không Hiển Thị</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thuộc Loại Game</label>
                                <select class="form-control" name="category_id">
                                    <option value="0">----- Chọn Game -----</option>
                                    @foreach ($category as $key => $huyCategory)
                                        <option {{ $huyCategory->id == $nick->category_id ? 'selected' : 'Không Có' }}
                                            value="{{ $huyCategory->id }}">{{ $huyCategory->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="decs" required id="desc_blog" cols="30" rows="10" placeholder="..." class="form-control">{{ $nick->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Phụ Kiện</label>
                                <textarea name="attribute" required id="desc_blog" cols="30" rows="10" placeholder="..." class="form-control">{{ $nick->attribute }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Nick Game</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
