<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbclassController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('post')->get();
        return view('db',['items'=>$items]);
    }
    public function add(Request $request)
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $param=[
            'id'=>$request->id,
            'name'=>$request->name,
        ];
        DB::table('post')->insert($param);
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $item=DB::table('post')->where('id',$request->id)->first();
        return view('edit',['form'=>$item]);
    }
    public function update(Request $request)
    {
        $param=[
            'id'=>$request->id,
            'name'=>$request->name,
        ];
        DB::table('post')->where('id',$request->id)->first();
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $item = DB::table('post')->where('id', $request->id)->first();
        return view('delete', ['form' => $item]);
    }
    public function remove(Request $request)
    {
        DB::table('post')->where('id', $request->id)->delete();
        return redirect('/');
    }

}
