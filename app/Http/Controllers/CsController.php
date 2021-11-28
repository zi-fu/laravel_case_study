<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CsRequest;
use Illuminate\Support\Facades\DB;

class CsController extends Controller
{
    // 一覧
    public function index() 
    {
        $items = DB::select('select * from people');

        var_dump($items);



        return view('index', ['items' => $items]);
    }
    // 詳細
    public function detail() 
    {

        echo '詳細だよ';
        exit;

        return view('index');
    }
    // 編集
    public function edit() 
    {
        echo '編集だよ';
        exit;

        return view('index');
    }
    // 編集（保存）
    public function update() 
    {
        echo '編集（保存）だよ';
        exit;

        return view('index');
    } 
    // 削除
    public function delete() 
    {

        echo '削除だよ';
        exit;

        return view('index');
    }
    // 新規入力
    public function create() 
    {
        return view('create');
    }
    // 新規入力（登録）
    public function store(CsRequest $request)
    {

        echo '登録画面だよ';
        exit;

        return view('index');
    }


    //  Bootstrap TEST用
    public function test()
    {
        return view('test');
    }
}
