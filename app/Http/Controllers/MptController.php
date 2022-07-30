<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class MptController extends Controller
{
    private $perpage = 2;
    public function home()
    {
        return view('mpt.home');
    }
    public function showArticles()
    {

        return view('mpt.articles',[   'posts' => Post::publish()->latest()->paginate($this->perpage) ]);
    }
    public function latestArticles()
    {
        return view('mpt.home',[   'posts' => Post::publish()->latest()->take(4)->get() ]);
    }
    public function searchPosts(Request $request){
        if(!$request->get('keyword')){
            return redirect()->route('mpt.home');
        }
        return view('mpt.search-post',[
            'posts' => Post::publish()->search($request->keyword)
            ->paginate($this->perpage)->appends(['keyword' => $request->keyword])
        ]);
    }
    public function showPostDetail($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if(!$post){
            return redirect()->route('mpt.home');
        }
        return view('mpt.post-detail',[
            'post' =>$post
        ]);
    }
}
