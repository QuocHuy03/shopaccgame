@extends('layouts.app')
@section('navbar')
    <div class="container pb-3">@include('admin.include.navbar')</div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt Kê Phụ Kiện Game</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('accessories.create') }}" class="btn btn-success">Thêm Phụ Kiện Sản Phẩm</a>
                    <div class="pt-4">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên Phụ Kiện</th>
                                    <th scope="col">Hiển Thị</th>
                                    <th scope="col">Phụ Kiện</th>
                                    <th scope="col">Quản Lí</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($accessories as $key => $huydev)
                                    <tr>
                                        <th scope="row">{{ $key }}</th>
                                        <td>{{ $huydev->title }}</td>
                                        <td>
                                            @if ($huydev->status == 0)
                                                Không Hiển Thị
                                            @else
                                                Hiển Thị
                                            @endif
                                        </td>
                                       <td>
                                        {{ $huydev->category->title }}
                                       </td>
                                        <td style="display:flex;gap:10px">
                                            <form action="{{ route('accessories.destroy', $huydev->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button onclick="return confirm('Bạn Có Muốn Xóa Danh Mục Này Không ?')"
                                                    class="btn btn-danger">Xóa</button>
                                            </form>
                                            <a href="{{ route('accessories.edit', $huydev->id) }}"
                                                class="btn btn-warning">Sửa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $accessories->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
