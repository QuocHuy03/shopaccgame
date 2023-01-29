<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('id', 'DESC')->paginate(5);
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all(); // lấy tất cả
        $data = $request->validate(
            [
                'title' => 'required|unique:categories|max:255',
                'slug' => 'required|unique:categories|max:255',
                'image' => 'required|unique:categories|max:255',
                'decs' => 'required|max:255',
                'status' => 'required',
            ],
            [
                'title.unique' => 'Tên Danh Mục Game Đã Có Điền Tên Khác Nhé',
                'title.required' => 'Tên Danh Mục Game Phải Có',
                'slug.unique' => 'Tên Slug Danh Mục Game Đã Có Điền Tên Khác Nhé',
                'slug.required' => 'Tên Slug Danh Mục Game Phải Có',
                'decs.required' => 'Mô Tả Danh Mục Game Phải Có',
                'image.required' => 'Hình Ảnh Phải Có',
            ]
        );
        $category = new Category();
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->image = $data['image'];
        $category->decs = $data['decs'];
        $category->status = $data['status'];
        $category->save();
        return redirect()->route('category.index')->with('status', 'Thêm Sản Phẩm Thành Công');
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
    public function edit($id) // edit
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
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

        $category = Category::find($id);
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->image = $data['image'];
        $category->decs = $data['decs'];
        $category->status = $data['status'];
        $category->save();
        return redirect()->route('category.index')->with('status', 'Update Sản Phẩm Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('status','Delete Sản Phẩm Thành Công');
    }
}
