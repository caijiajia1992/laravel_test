<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Hello World!";
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
        //
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
        //
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

    public function request(Request $request)
    {
        echo "参数ID".$request->input('id')."<br/>";
        echo "你好,".$request->input('name','游客');
        //var_dump($request->has('num'));
        //echo $id;
        dd($request->all());
        return "Demo1";
    }

    public function response()
    {
//        $content = "Hello World!";
//        $status  = 200;
//        $value = "text/html";
//        return (new Response($content, $status))
//            ->header('Content-Type', $value);
        return redirect('/stu');
    }

    public function demo3()
    {
        $list = DB::select("select * from stu where id=2");
        dd($list);
    }
}
