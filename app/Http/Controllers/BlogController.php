<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $blog = Blog::orderBy('id', 'DESC')->paginate(5);
        return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'title' => 'required|unique:blogs|max:255',
                'slug' => 'required|unique:blogs|max:255',
                'image' => 'required|unique:blogs|max:255',
                'decs' => 'required',
                'king_of_blogs' => 'required|max:255',
                'content' => 'required',
                'status' => 'required',
            ],
            [
                'title.unique' => 'Tên Blogs Game Đã Có Điền Tên Khác Nhé',
                'title.required' => 'Tên Blogs Game Phải Có',
                'slug.unique' => 'Tên Slug Blogs Game Đã Có Điền Tên Khác Nhé',
                'slug.required' => 'Tên Slug Blogs Game Phải Có',
                'king_of_blogs.required' => 'Tên Loại Game Phải Có',
                'decs.required' => 'Mô Tả Blogs Game Phải Có',
                'content.required' => 'Mô Tả Blogs Game Phải Có',
                'image.required' => 'Hình Ảnh Phải Có',
            ]
        );

        $blog = new Blog();
        $blog->title = $data['title'];
        $blog->slug = $data['slug'];
        $blog->king_of_blogs = $data['king_of_blogs'];
        $blog->content = $data['content'];
        $blog->image = $data['image'];
        $blog->description = $data['decs'];
        $blog->status = $data['status'];
        $blog->save();
        return redirect()->route('blog.index')->with('status', 'Thêm Blog Bài Viết Thành Công');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all(); // lấy tất cả
        $blog = Blog::find($id);
        $blog->title = $data['title'];
        $blog->slug = $data['slug'];
        $blog->king_of_blogs = $data['king_of_blogs'];
        $blog->image = $data['image'];
        $blog->description = $data['decs'];
        $blog->content = $data['content'];
        $blog->status = $data['status'];
        $blog->save();
        return redirect()->route('blog.index')->with('status', 'Update Blog Bài Viết Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blog.index')->with('status', 'Delete Blog Bài Viết Thành Công');
    }
}
