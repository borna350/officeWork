<?php

namespace App\Http\Controllers;

use App\Groups;
use Illuminate\Http\Request;


class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index(Request $request)
    {
        $input = Groups::all();
        $search1=$request->get('search');
        $result=Groups::where('name','Like','%'.$search1.'%')->get();
        
        
        return view('groups.index')->with('input',$input)->with('result',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = new Groups;
        $input->name = $request->name;
        $input->status = $request->status;
        $input->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $input=Groups::find($id); 
        return view('groups.show')->with('input',$input);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $input=Groups::find($id);
        return view('groups.edit')->with('input',$input);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=Groups::find($id);
        $input->name = $request->name;
        $input->status = $request->status;
        $input->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input=Groups::find($id);
        $input->delete();
        return redirect('/home');
    }
}
