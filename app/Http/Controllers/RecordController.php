<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RecordModel;

class RecordController extends Controller
{

    // 会員情報画面を表示
    public function index()
    {
        $records = RecordModel::all();

        return view('index', compact('records'));
    }

    // 会員登録画面を表示
    public function create()
    {
        return view('create');
    }

    // 会員登録アクション
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:records',
            'phone' => 'required',
        ]);

        RecordModel::create($request->all());

        return redirect()->route('index')
            ->with('success', '会員情報を登録しました。');
    }

    // 会員編集画面を表示
    public function edit($id)
    {
        $records = RecordModel::find($id);

        return view('edit', compact('records'));
    }

    // 会員情報の更新アクション
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:records,email,' . $id,
            'phone' => 'required',
        ]);
    
        $records = RecordModel::find($id);
        $records->update($request->all());
    
        return redirect()->route('index')
            ->with('success', '会員情報を更新しました。');
    }

    // 会員情報の削除アクション
    public function delete($id)
    {
        $records = RecordModel::find($id);
        $records->delete();

        return redirect()->route('index')
            ->with('success', '会員情報を削除しました。');
    }


    // 登録画面と編集画面でのエラー表示

}