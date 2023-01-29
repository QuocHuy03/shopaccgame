<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accessories;
use App\Models\Category;

class AccessoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $accessories = Accessories::with('category')->orderBy('id', 'DESC')->paginate(5);
        // dd($accessories);
        return view('admin.accessories.index', compact('accessories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        return view('admin.accessories.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->all();
        $accessories = new Accessories();
        $accessories->title = $data['title'];
        $accessories->category_id = $data['category_id'];
        $accessories->status = $data['status'];
        $accessories->save();
        return redirect()->route('accessories.index')->with('status', 'Thêm Phụ Kiện Thành Công');
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
        $category = Category::orderBy('id', 'DESC')->get();
        $accessories = Accessories::find($id);
        return view('admin.accessories.edit', compact('accessories', 'category'));
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

        $accessories = Accessories::find($id);
        $accessories->title = $data['title'];
        $accessories->category_id = $data['category_id'];
        $accessories->status = $data['status'];
        $accessories->save();
        return redirect()->route('accessories.index')->with('status', 'Update Phụ Kiện Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accessories = Accessories::find($id);
        $accessories->delete();
        return redirect()->route('accessories.index')->with('status', 'Delete Phụ Kiện Thành Công');
    }
}
