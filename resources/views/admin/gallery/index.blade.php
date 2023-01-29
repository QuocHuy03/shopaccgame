@extends('layouts.app')
@section('navbar')
    <div class="container pb-3">@include('admin.include.navbar')</div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm Hình Ảnh gallery Game</div>
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

                    <div class="pt-4">
                        <form method="post" enctype="multipart/form-data" action="{{ route('gallery.store') }}">
                            <input type="hidden" name="nick_id" value="{{ Request::segment(2) }}">
                            @csrf

                            <div class="form-group">
                                <label>Hình Ảnh</label>
                                <input type="file" multiple name="image[]" required class="form-control"
                                    placeholder="...">
                            </div>

                            <button type="submit" class="btn btn-primary">Thêm Ảnh</button>
                        </form>
                    </div>
              
                        <table class="table pt-3" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên Gallery</th>
                                    {{-- <th scope="col">Mô Tả</th> --}}
                                    <th scope="col">Hình Ảnh</th>
                                    <th scope="col">Quản Lí</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gallery as $key => $huydev)
                                    <tr>
                                        <th scope="row">{{ $key }}</th>
                                        <td>{{ $huydev->title }}</td>
                                        {{-- <td>{{ $huydev->decs }}</td> --}}
                                
                                        <td><img src="{{ asset('upload/gallery/' . $huydev->image) }}" width="150px" alt=""></td>
                                        <td style="display:flex;gap:10px">
                                            <form action="{{ route('gallery.destroy', $huydev->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button onclick="return confirm('Bạn Có Muốn Xóa Gallery Này Không ?')"
                                                    class="btn btn-danger">Xóa</button>
                                            </form>
                                            <a href="{{ route('gallery.edit', $huydev->id) }}"
                                                class="btn btn-warning">Sửa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
