<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //create variable and store all blog posts from the database
        //return view and pass in the above variables
        $posts=Post::orderBy('id','desc')->paginate(10);

        return view('Posts.index')->withPosts($posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

         return view('Posts.create')->with("postm","active");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //validate the data
         //the laravel validation also has csrf protection
        $this->validate($request,array(

            'title'=>'required|max:255',
            'body'=>'required'
        ));


        //successfully store in the databse

        $post=new Post;//Post is the model we had created

        $post->title=$request->title;
        $post->description=$request->body;

        $post->save();//saves the data to the db


        Session::flash('success', 'Blog post was saved successfully');


        //redirect user to another page
        return redirect()->route('posts.show',$post->id);


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

        $post=Post::find($id);

        return view('Posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //find posts in the database and save as a variable
      //return the view and pass in the variable we previusly created
      $post=Post::find($id);

      return view('Posts.edit')->withPost($post);

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
          //validate the data
         //the laravel validation also has csrf protection
         $this->validate($request,array(

            'title'=>'required|max:255',
            'description'=>'required'
        ));

        //update data to the database
        $post=Post::find($id);//main difference with store we search for existing element not
        //creating a new one

        $post->title=$request->title;
        $post->description=$request->input('description');

        $post->save();//saves the data to the db

        //set flash data with success message
        Session::flash('success', 'Blog post was updated successfully');


        //redirect with flash data to post.show

        return redirect()->route('posts.show',$post->id);

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
        $post=Post::find($id);
        $post->delete();

        Session::flash('success', 'Blog post was deleted successfully');

        return redirect()->route('posts.index');
    }
}
