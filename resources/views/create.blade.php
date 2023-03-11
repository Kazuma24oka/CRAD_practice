@extends('layout.layout')

@section('title', '会員登録画面')


@section('content')
<div class="form_margin">
    <div class="d-flex justify-content-center align-items-center ">
        <form method="POST" action="{{ route('store') }}" class="text-center record_form">
            @csrf
            <h3>会員登録</h3>
            <br>
            <div class="mb-2">
                <input type="text" class="form-control  rounded-0" id="name" name="name" placeholder="名前" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-2">
                <input type="text" class="form-control rounded-0 " id="phone" name="phone" placeholder="電話番号" value="{{ old('phone') }}">
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <input type="email" class="form-control rounded-0" id="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary rounded-0 button_form" >登録</button>
        </form>
    </div>
</div>
@endsection