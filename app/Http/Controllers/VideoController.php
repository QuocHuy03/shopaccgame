<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $video = Video::orderBy('id', 'DESC')->paginate(5);
        return view('admin.video.index', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.create');
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
                'title' => 'required|unique:videos|max:255',
                'slug' => 'required|unique:videos|max:255',
                'image' => 'required|unique:videos|max:255',
                'link' => 'required|max:255',
                'decs' => 'required|max:255',
                'status' => 'required',
            ],
            [
                'title.unique' => 'Tên Videos Game Đã Có Điền Tên Khác Nhé',
                'title.required' => 'Tên Videos Game Phải Có',
                'slug.unique' => 'Tên Slug Videos Game Đã Có Điền Tên Khác Nhé',
                'slug.required' => 'Tên Slug Videos Game Phải Có',
                'link.required' => 'Tên link Videos Game Phải Có',
                'decs.required' => 'Mô Tả Videos Game Phải Có',
                'image.required' => 'Hình Ảnh Phải Có',
            ]
        );
        $video = new Video();
        $video->title = $data['title'];
        $video->slug = $data['slug'];
        $video->image = $data['image'];
        $video->description = $data['decs'];
        $video->status = $data['status'];
        $video->link = $data['link'];
        $video->save();
        return redirect()->route('video.index')->with('status', 'Thêm Video Thành Công');
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
        $video = Video::find($id);
        return view('admin.video.edit', compact('video'));
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

        $video = Video::find($id);
        $video->title = $data['title'];
        $video->slug = $data['slug'];
        $video->image = $data['image'];
        $video->description = $data['decs'];
        $video->status = $data['status'];
        $video->link = $data['link'];
        $video->save();
        return redirect()->route('video.index')->with('status', 'Update Videos Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();
        return redirect()->route('video.index')->with('status', 'Delete Videos Thành Công');
    }
}
