<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Groups;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
        $input = Posts::with('group')->paginate(2);
        return view('posts.index')->with('input',$input);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups=Groups::all();
        return view('posts.create')->with('groups',$groups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = new Posts;
        $input->group_id = $request->group_id;
        $input->title = $request->title;
        $input->details = $request->details;
        $input->status = $request->status;
        $input->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $input=Posts::find($id)->group;
       
       //echo $input;
        
        return view('posts.show')->with('input',$input);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $groups=Groups::all();
         $input=Posts::find($id);
         return view('posts.edit')->with('input',$input)->with('groups',$groups);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=Posts::find($id);
        $input->group_id = $request->group_id;
        $input->title = $request->title;
        $input->details = $request->details;
        $input->status = $request->status;
        $input->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input=Posts::find($id);
        $input->delete();
        return redirect('/home');
    }
}
