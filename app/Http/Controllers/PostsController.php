<?php

namespace App\Http\Controllers;

use App\register;

use Storage;
use Session;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('post.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $this->validate($request, [
        //     'cate' => ['required', 'string', 'max:255'],
        //     'title' => ['required', 'string', 'max:255'],
        //     'location' => ['required', 'string', 'max:255'],
        //     'brand' => ['required', 'string', 'max:255'],
        //     'desc' => ['required', 'string', 'max:255'],
        //     'search' => ['required', 'string', 'max:255'],
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);


        $id = IdGenerator::generate(['table' => 'posts', 'length' => 10, 'prefix' =>date('ym')]);
        // $id = IdGenerator::generate(['table' => 'posts', 'length' => 10, 'prefix' =>'INV-']);

        // $path = $request->input('img')->store('image');
        // return ['path'=>$path, 'upload'=>'success'];
        $post = new Post;
        $post->post_id = $id;
        $post->category = $request->input('cate');
        $post->title = $request->input('title');
        $post->location = $request->input('location');
        $post->brand = $request->input('brand');
        $post->desc = $request->input('desc');
        // $post->image = $request->file('image');
        if($request->hasfile('image')) {
            $filename = $request->file('image');
            $path = storage_path();
            if (!empty($filename)) {
               foreach ($filename as $files) {
                   Storage::putFileAs( 'public/images', $files, $files->getClientOriginalName());
                   $post->image = $files->getClientOriginalName();
               }
            }
        }
        $post->price = $request->input('price');
        if (session::has('error')) {
            return redirect('/posts')->with('error', 'An Error Occur');
        }else {
            $post->save();

            return redirect('/posts')->with('success', 'Your Post is Created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        
        $this->validate($request,[
            'search' => ['required', 'string', 'max:255'],
        ]
        );
        $search = $request->search;
            $posts = Post::where('category', 'like', '%' . $search . '%')
                ->orWhere('title', 'like', '%' . $search . '%')
                ->orWhere('location', 'like', '%' . $search . '%')
                ->orWhere('brand', 'like', '%' . $search . '%')
                ->orWhere('price', 'like', '%' . $search . '%')
                ->get();
            
            return view('pages.result', ['posts' => $posts]);
    }
}
