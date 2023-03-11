@extends('layout.layout')

@section('title', '会員編集画面')

@section('content')
<div class="form_margin">
    <div class="d-flex justify-content-center align-items-center ">
        <form method="POST" action="{{ route('update', $records->id) }}" class="text-center record_form">
            @csrf
            @method('PUT')
            <h3>会員編集 会員ID:{{$records->id}}</h3>
            <br>
            <div class="mb-2">
                <input type="text" class="form-control  rounded-0"" id="name" name="name" placeholder="名前" value="{{ $records->name }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-2">
                <input type="text" class="form-control  rounded-0"" id="phone" name="phone" placeholder="電話番号" value="{{ $records->phone }}">
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <input type="email" class="form-control  rounded-0"" id="email" name="email" placeholder="メールアドレス" value="{{ $records->email }}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary rounded-0 button_form mb-2">編集</button>
        </form> 
    </div>
    <div class="d-flex justify-content-center align-items-center ">
        <form action="{{ route('delete', $records->id) }}" method="POST" >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger rounded-0 button_form" onclick="return confirm('本当に削除しますか？')">削除</button>
        </form>
    </div>
</div>
@endsection