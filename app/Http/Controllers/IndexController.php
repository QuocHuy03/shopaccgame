<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\Video;
use App\Models\Nick;
use App\Models\Gallery;

class IndexController extends Controller
{
    public function home()
    {
        $blogs_huongdan  =  Blog::orderBy('id', 'DESC')->where('king_of_blogs', 'huongdan')->get();
        $slider = Slider::orderBy('id', 'DESC')->where('status', 1)->get();
        $category = Category::orderBy('id', 'DESC')->get();
        return view('pages.home', compact('category', 'slider', 'blogs_huongdan'));
    }

    public function dichvu() 
    
    {
        $blogs_huongdan  =  Blog::orderBy('id', 'DESC')->where('king_of_blogs', 'huongdan')->get();
        $slider = Slider::orderBy('id', 'DESC')->where('status', 1)->get();
        return view('pages.services', compact('slider', 'blogs_huongdan')); 
    }
    public function acc($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $nick = Nick::where('category_id', $category->id)->where('status', 1)->paginate(16);
        $blogs_huongdan  =  Blog::orderBy('id', 'DESC')->where('king_of_blogs', 'huongdan')->get();
        $slider = Slider::orderBy('id', 'DESC')->where('status', 1)->get();
        return view('pages.acc', compact('slug', 'slider', 'blogs_huongdan', 'nick', 'category'));
    }
    public function detail_acc($ms)
    {
        $nick_game = Nick::where('ms',$ms)->first();
        $nick = Nick::find($nick_game->id);
        $gallery = Gallery::where('nick_id',$nick->id)->orderBy('id','DESC')->get();
        $category = Category::where('id',$nick->category_id)->first();
        $blogs_huongdan  =  Blog::orderBy('id', 'DESC')->where('king_of_blogs', 'huongdan')->get();
        $slider = Slider::orderBy('id', 'DESC')->where('status', 1)->get();
        return view('pages.accgame', compact('slider', 'blogs_huongdan','nick','category','gallery'));
        
    }
    public function danhmucgame($slug)
    {
        $blogs_huongdan  =  Blog::orderBy('id', 'DESC')->where('king_of_blogs', 'huongdan')->get();
        $slider = Slider::orderBy('id', 'DESC')->where('status', 1)->get();
        $category = Category::where('slug', $slug)->first();
        return view('pages.category', compact('slider', 'blogs_huongdan', 'category'));
    }
    public function danhmuccon($slug)
    {
        $blogs_huongdan  =  Blog::orderBy('id', 'DESC')->where('king_of_blogs', 'huongdan')->get();
        $slider = Slider::orderBy('id', 'DESC')->where('status', 1)->get();
        return view('pages.sub_category', compact('slug', 'slider', 'blogs_huongdan'));
    }
    public function blogs()
    {
        $blogs  =  Blog::orderBy('id', 'DESC')->where('king_of_blogs', 'blogs')->paginate(30);
        $blogs_huongdan  =  Blog::orderBy('id', 'DESC')->where('king_of_blogs', 'huongdan')->get();
        $slider = Slider::orderBy('id', 'DESC')->where('status', 1)->get();
        return view('pages.blog', compact('slider', 'blogs', 'blogs_huongdan'));
    }
    public function blogs_detail($slug)
    {
        $blogs_huongdan  =  Blog::orderBy('id', 'DESC')->where('king_of_blogs', 'huongdan')->get();
        $blogs  =  Blog::where('slug', $slug)->first();
        $slider = Slider::orderBy('id', 'DESC')->where('status', 1)->get();
        return view('pages.blog_detail', compact('slider', 'blogs', 'blogs_huongdan'));
    }
    public function show_video(Request $request)
    {
        $data = $request->all();
        $video = Video::find($data['id']);
        $output['video_title'] = $video->title;
        $output['video_description'] = $video->description;
        $output['video_link'] = $video->link;
        echo json_encode($output);
    }
    public function video_highlight()
    {
        $videos  =  Video::orderBy('id', 'DESC')->where('status', 1)->paginate(30);
        $blogs_huongdan  =  Blog::orderBy('id', 'DESC')->where('king_of_blogs', 'huongdan')->get();
        $slider = Slider::orderBy('id', 'DESC')->where('status', 1)->get();
        return view('pages.video', compact('slider', 'videos', 'blogs_huongdan'));
    }
}
