<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //You need a variable because compact() expects the name of an existing variable.
        $tasks = DB::table('_tasks')->orderBy('id')->get();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         DB::table("_tasks")->insert ([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('tasks.index');
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
        // first() executes the query and returns the first matching record from the database.
        //Without first(), the query is not executed and Laravel keeps a query builder object.
        $task = DB::table('_tasks')->where('id', $id)->first();
        return view('update', compact('task'));
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
        DB::table('_tasks')->where('id', $id)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('_tasks')->where('id', $id)->delete();
        return redirect()->route('tasks.index');
    }
   
}
