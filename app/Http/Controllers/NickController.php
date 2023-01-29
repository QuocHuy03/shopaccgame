<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nick;
use App\Models\Category;
use App\Models\Accessories;

class NickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nick = Nick::with('category')->withCount('gallery')->orderBy('id', 'DESC')->paginate(20);
        return view('admin.nick.index', compact('nick'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        return view('admin.nick.create', compact('category'));
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
        $attribute = [];
        foreach ($data['attribute'] as $key => $huydev) {
            foreach ($data['name_attribute'] as $key2 => $name_atrri) {
                if ($key == $key2) {
                    $attribute[] = $name_atrri . ': ' . $huydev;
                }
            }
        }
        // print_r($attribute);
        $nick = new Nick();
        $nick->title = $data['title'];
        $nick->ms = random_int(100000, 999999);
        $nick->attribute = json_encode($attribute, JSON_UNESCAPED_UNICODE); // urtf8
        $nick->price = $data['price'];
        $nick->description = $data['decs'];
        $nick->category_id = $data['category_id'];
        $nick->status = $data['status'];
        $nick->image = $data['image'];
        $nick->save();
        return redirect()->route('nick.index')->with('status', 'Thêm Phụ Kiện Thành Công');
    }
    public function choose_category(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $accessories = Accessories::where('category_id', $data['category_id'])->where('status', 1)->get();
        $output = "";
        foreach ($accessories as $key => $huyACC) {
            $output .= '<div class="form-group">
            <label for="">' . $huyACC->title . '</label>
            <input type="hidden" value="' . $huyACC->title . '" name = "name_attribute[]">
            <input type="text" class="form-control" required name="attribute[]" placeholder="...">
        </div>
        ';
        }
        echo $output;
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
        $nick = Nick::find($id);
        $category = Category::orderBy('id', 'DESC')->get();
        return view('admin.nick.edit', compact('nick','category'));
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
        $data = request()->all();
      
        // print_r($attribute);
        $nick = Nick::find($id);
        $nick->title = $data['title'];
        $nick->ms = $nick->ms;
        $nick->attribute = $data['attribute']; // urtf8
        $nick->price = $data['price'];
        $nick->description = $data['decs'];
        $nick->category_id = $data['category_id'];
        $nick->status = $data['status'];
        $nick->image = $data['image'];
        $nick->save();
        return redirect()->route('nick.index')->with('status', 'Update Phụ Kiện Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nick = Nick::find($id);
        $nick->delete();
        return redirect()->route('nick.index')->with('status','Delete Phụ Kiện Thành Công');
    }
}
