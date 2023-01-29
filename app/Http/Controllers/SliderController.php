<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::orderBy('id', 'DESC')->paginate(5);
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
                'title' => 'required|unique:slider|max:255',
                'image' => 'required|unique:slider|max:255',
                'description' => 'required|max:255',
                'status' => 'required',
            ],
            [
                'title.unique' => 'Tên Slider Game Đã Có Điền Tên Khác Nhé',
                'title.required' => 'Tên Slider Game Phải Có',
                'description.required' => 'Mô Tả Slider Game Phải Có',
                'image.required' => 'Hình Ảnh Phải Có',
            ]
        );
        $slider = new Slider();
        $slider->title = $data['title'];
        $slider->image = $data['image'];
        $slider->description = $data['description'];
        $slider->status = $data['status'];
        $slider->save();
        return redirect()->route('slider.index')->with('status', 'Thêm Slider Thành Công');
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
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
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

        $slider = Slider::find($id);
        $slider->title = $data['title'];
        $slider->image = $data['image'];
        $slider->description = $data['description'];
        $slider->status = $data['status'];
        $slider->save();
        return redirect()->route('slider.index')->with('status', 'Update Slider Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('slider.index')->with('status','Delete Sản Phẩm Thành Công');
    }
}
