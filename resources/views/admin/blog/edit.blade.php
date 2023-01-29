@extends('layouts.app')
@section('navbar')
    <div class="container pb-3">@include('admin.include.navbar')</div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập Nhật Blogs</div>
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
                    <a href="{{ route('blog.index') }}" class="btn btn-success">Liệt Kê Blogs</a>
                    <a href="{{ route('blog.create') }}" class="btn btn-success">Thêm Blogs</a>
                    <div class="pt-4">
                        <form action="{{ route('blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" id="slug" onkeyup="ChangeToSlug()"
                                    value="{{ $blog->title }}" class="form-control" placeholder="...">
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" id="convert_slug" name="slug" value="{{ $blog->slug }}"
                                    class="form-control" placeholder="...">
                            </div>
                            <div class="form-group">
                                <label>Hình Ảnh</label>
                                <input type="text" name="image" value="{{ $blog->image }}" class="form-control"
                                    placeholder="...">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    @if ($blog->status == 1)
                                        <option value="1">Hiển Thị</option>
                                        <option value="0">Không Hiển Thị</option>
                                    @else
                                        <option value="1">Hiển Thị</option>
                                        <option value="0">Không Hiển Thị</option>
                                    @endif
                                </select>

                                <label>Loại Tin</label>
                                <select class="form-control" name="king_of_blogs">
                                    @if ($blog->status == 'blogs')
                                        <option selected value="blogs">Blogs</option>
                                        <option value="huongdan">Hướng Dẫn</option>
                                    @else
                                        <option value="blogs">Blogs</option>
                                        <option selected value="huongdan">Hướng Dẫn</option>
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="decs" id="desc_blog" id="" cols="30" rows="10" placeholder="..."
                                    class="form-control">{{ $blog->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" id="content_blog" id="" cols="30" rows="10" placeholder="..."
                                    class="form-control">{{ $blog->content }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Danh Mục</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
