@extends('layouts.app')
@section('navbar')
    <div class="container pb-3">@include('admin.include.navbar')</div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt Kê Nick Game</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('nick.create') }}" class="btn btn-success">Thêm Nick Sản Phẩm</a>
                    <div class="pt-4">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên Nick</th>
                                    <th scope="col">Thư Viện Ảnh</th>
                                    <th scope="col">Mã Số</th>
                                    <th scope="col">Mô Tả</th>
                                    <th scope="col">Hiển Thị</th>
                                    <th scope="col">Hình Ảnh</th>
                                    <th scope="col">Thuộc Nick</th>
                                    <th scope="col">Thuộc Tính</th>
                                    <th scope="col">Quản Lí</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nick as $key => $huydev)
                                    <tr>
                                        <th scope="row">{{ $key }}</th>
                                        <td>{{ $huydev->title }}</td>

                                        <td><a
                                                href="{{ route('gallery.edit', $huydev->id) }}"class="btn btn-success">Thêm</a>
                                            @if ($huydev->gallery_count == 0)
                                                <span class="badge badge-dark">{{$huydev->gallery_count}} Ảnh</span>
                                            @else
                                                <span class="badge badge-dark">{{ $huydev->gallery_count }} Ảnh</span>
                                            @endif
                                        </td>
                                        <td>#{{ $huydev->ms }}</td>
                                        <td>{!! $huydev->description !!}</td>
                                        <td>
                                            @if ($huydev->status == 0)
                                                Không Hiển Thị
                                            @else
                                                Hiển Thị
                                            @endif
                                        </td>
                                        <td><img src="{{ $huydev->image }}" width="200" alt=""></td>
                                        <td>{{ $huydev->category->title }}</td>
                                        <td>
                                            @php
                                                $attribute = json_decode($huydev->attribute, true);
                                            @endphp
                                            @foreach ($attribute as $attr)
                                                <span class="badge badge-dark">{{ $attr }}</span>
                                            @endforeach
                                        </td>
                                        <td style="display:flex;gap:10px">
                                            <form action="{{ route('nick.destroy', $huydev->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button onclick="return confirm('Bạn Có Muốn Xóa Nick Này Không ?')"
                                                    class="btn btn-danger">Xóa</button>
                                            </form>
                                            <a href="{{ route('nick.edit', $huydev->id) }}" class="btn btn-warning">Sửa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $nick->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
