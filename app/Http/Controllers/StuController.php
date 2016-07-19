<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //显示
        $list = \DB::table('stu')->get();
        //dd($list);
        //var_dump($list);
        return view("stu.index",['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //加载添加页面
    public function create()
    {
        //
        return view("stu.create");
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
        //$arr = $request->all();
        $arr = $request->only( 'sex', 'name', 'age', 'classid');
        //dd($arr);
        $id = \DB::table('stu')->insertGetId($arr);
        if ($id > 0) {
            return "成功添加一条数据" . $id;
        }else {
            return "添加失败";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //浏览详情
    public function show($id)
    {
        //
        return "详情".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //加载修改
    public function edit($id)
    {
        //
        $stu = \DB::table('stu')->where('id', $id)->first();//查询单个信息
        return view('stu.edit',['stu'=>$stu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //执行修改
    public function update(Request $request, $id)
    {
        //
        $data = $request->only('name','sex','age','classid');
        $id = \DB::table('stu')->where('id',$id)->update($data);
        if($id){
            return "修改成功";
        }else{
            return "修改失败";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //删除操作
    public function destroy($id)
    {
        //
        \DB::table('stu')->where('id','=',$id)->delete();
        return $this->index();
    }
}
