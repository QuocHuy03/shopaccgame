@extends('layouts.app')
@section('navbar')
    <div class="container pb-3">@include('admin.include.navbar')</div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Liệt Kê Video Game</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('video.create') }}" class="btn btn-success">Thêm Video Sản Phẩm</a>
                    <div class="pt-4">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên Video</th>
                                    <th scope="col">Link Video</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Mô Tả</th>
                                    <th scope="col">Hình Ảnh</th>
                                    <th scope="col">Loại Bài Viết</th>
                                    <th scope="col">Quản Lí</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($video as $key => $huydev)
                                    <tr>
                                        <th scope="row">{{ $key }}</th>
                                        <td>{{ $huydev->title }}</td>
                                        <td width="200px">{!! $huydev->link !!}</td>
                                        <td>{{ $huydev->slug }}</td>
                                        <td>{!! $huydev->description !!}</td>
                                        {{-- <td>{{ $huydev->content }}</td> --}}
                                        <td>
                                            @if ($huydev->status == 0)
                                                Không Hiển Thị
                                            @else
                                                Hiển Thị
                                            @endif
                                        </td>
                                        <td><img src="{{ $huydev->image }}" width="200px" alt=""></td>
                                        <td style="display:flex;gap:10px">
                                            <form action="{{ route('video.destroy', $huydev->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button onclick="return confirm('Bạn Có Muốn Xóa Danh Mục Này Không ?')"
                                                    class="btn btn-danger">Xóa</button>
                                            </form>
                                            <a href="{{ route('video.edit', $huydev->id) }}" class="btn btn-warning">Sửa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $video->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
