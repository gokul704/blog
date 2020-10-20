<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post=Posts::all();
        return view('posts.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $cat=Category::all();
        return view('posts.create',compact('cat'));
        // return $cat;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $post=new Posts();

        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'title' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1014',
                    'body'=>'required',
                    'category'=>'required',
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public', $validated['title'].".".$extension);
                $url = Storage::url($validated['title'].".".$extension);
                $file = Posts::create([
                   'title' => $validated['title'],
                    'image' => $url,
                    'body'=>$request->input('body'),
                    'category'=>$request->input('category'),
                ]);
                Session::flash('success', "Success!");
                return Redirect(Route('post.index'))->with('success', 'post saved!');

            }
        }
        // if($request->hasFile('image')){
        //     $image= $request->file('image');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     Image::make($image)->resize(300, 300)->save( public_path('/images/' . $filename ) );

        //     $post->image= $filename;
        //     $post->save();

        // }
        else{
            $post=new Posts();
            $post->title=$request->input('title');
            $post->body=$request->input('body');
            $post->category=$request->input('category');
            $post->save();
            return Redirect(Route('post.index'))->with('success', 'post saved!');


        }

        abort(500, 'Could not upload image :(');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $posts=Posts::findorFail($id);
        $cat=Posts::where('id',$id)->value('category');
        $category=Category::all();
        return view('posts.edit',compact('posts','cat','category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        //
        $request->validate([
            'title'=>'required',
            'category'=>'required',
            'body'=>'required',

        ]);

           $posts->update($request->all());
           return Redirect(Route('post.index'))->with('success', 'post saved!');


        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
