@extends('layouts.app')
@section('navbar')
    <div class="container pb-3">@include('admin.include.navbar')</div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm Phụ Kiện Game</div>
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
                    <a href="{{ route('accessories.index') }}" class="btn btn-success">Liệt Kê Phụ Kiện Sản Phẩm</a>
                    <div class="pt-4">
                        <form method="post" enctype="multipart/form-data" action="{{ route('accessories.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="...">
                            </div>
                          
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="1">Hiển Thị</option>
                                    <option value="0">Không Hiển Thị</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Thuộc Loại Game</label>
                                <select class="form-control" name="category_id">
                                    @foreach ($category as $key => $huyCategory)
                                    <option value="{{$huyCategory->id}}">{{$huyCategory->title}}</option>  
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm Phụ Kiện</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
