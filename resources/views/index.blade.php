@extends('layout.layout')
@section('title', '会員情報画面')

<body>



@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
<a href="{{ route('create') }}" class="info_button"> >> 登録</a>
<div class="d-flex justify-content-center align-items-center">
    <div class="col-4 ml-2 ">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>名前</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->phone }}</td>
                        <td>{{ $record->email }}</td>
                        <td>
                            <a href="{{ route('edit', $record->id) }}" class="">>> 編集</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>