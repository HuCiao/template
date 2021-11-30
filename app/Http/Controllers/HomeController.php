<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\BlogCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $latest = Product::query()->where('on_sale','=','1')->orderBy('created_at','desc')->limit(8)->get();
        $hot = Product::query()->where('on_sale','=','1')->orderBy('sold_count','desc')->limit(8)->get();
        return view('index.index',[
            'latest' => $latest,
            'hot' => $hot
        ]);
    }

    public function about()
    {
        return view('index.about');
    }

    public function team()
    {
        return view('index.team');
    }

    public function faq()
    {
        return view('index.faq');
    }

    public function blog()
    {
        $blogs = Blog::query()->paginate(5);
        return view('index.blog',[
            'blogs' => $blogs
        ]);
    }

    public function detail(Blog $blog, Request $request)
    {
        $comments = BlogComment::query()
            ->where('blog_id', $blog->id)
            ->orderBy('updated_at', 'desc') // 按评价时间倒序
            ->limit(10) // 取出 10 条
            ->get();

        $cate = BlogCategory::query()->where('id','=',$blog->category_id)->first();

        $recents = Blog::query()->orderBy('created_at','desc')->limit(4)->get();

        $related = Blog::query()->where('category_id','=',$blog->category_id)->where('id','!=',$blog->id)->get();

        return view('index.blog_detail',[
            'blog' => $blog,
            'comments' => $comments,
            'cate' => $cate,
            'related' => $related,
            'recents' => $recents
        ]);
    }

    public function addComment(Request $request)
    {
        try{
            //获取数据
            $data = $request->all();
            print_r($data);
            //数据验证
            $Validator = Validator::make($data,[
            'comments' => 'required',
            'blog_id' => 'required',
            'reviewer' => 'required',
            ]);

            if($Validator->fails()) {
                return ['code' => 400, 'message' => $Validator->errors()];
            }else{
                $addComment = BlogComment::create($data);
            }

            if($addComment)
            {
                return redirect()->back();
            }
        }catch (\Exception $e) {
            return ['code' => 201, 'message' => $e->getMessage()];
        }
    }

    public function gallery()
    {
        return view('index.gallery');
    }

    public function contact()
    {
        return view('index.contact');
    }
}
