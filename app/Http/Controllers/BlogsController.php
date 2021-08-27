<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class BlogsController extends Controller
{
    public function index (){
        $blogs = Blog::paginate(5);
        return view('blogs.index',['blogs'=>$blogs]);
    }

    public function create (){
        $data = Blog::all();
        return view('blogs.create',['data'=>$data]);
    }

    public function man () {
        $blogs = DB::table('blogs')->where('type','man')->get();
        
        return view ('blogs.man',['blogs'=>$blogs]);
    }

    public function woman () {
        $blogs = DB::table('blogs')->where('type','woman')->get();
        return view ('blogs.woman',['blogs'=>$blogs]);
    }

    // show single post
    public function show ($id){
        $blog = Blog::find($id);
        return view('blogs.show', ['blog' => $blog]);

    }
    //edit single post
    public function edit ($id) { 
        $blog = Blog::find($id);
        return view('blogs.edit', ['blog' => $blog]);
    }

    public function store (Request $request){
        $blog = new Blog;
        // inser images
        $path = Storage::putFile('public', $request->file('file'));
        $url = Storage::url($path);
        $blog->title = $request->title;
        $blog->type = $request->type;
        $blog->image = $url;
        $blog->content = $request->content;
        $blog->save();

        return redirect('/blogs');

    }
    public function update (Request $request, $id) { 
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->type = $request->type;

        $blog->update();
        return redirect('/blogs');
    }

    public function delete ($id) { 
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/blogs');

    }
   
}
