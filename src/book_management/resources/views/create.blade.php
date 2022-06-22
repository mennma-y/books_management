@extends('layouts.app')

@section('title','書籍登録画面')

@section('content')
    <div class="register-title" style="margin-bottom: 70px;">
        <h2 style="margin-bottom: 30px;">書籍情報の登録</h2>
    </div>
    
    <form method="POST" action="/books/store">
        @csrf
        @if(count($errors) > 0)
            <p><span style="color:red; font-weight:bold;">※エラー部分を修正してください</span></p>
        @endif

        <div class="form-group create-form">
            <label for="title" style="float: left;">タイトル</label>
            <input type="text" style="padding:25px;" class="form-control" id="title" name="title" placeholder="タイトルを入力">
            @error('title')
                    <p><span style="color:red;">{{$message}}</span></p>
            @enderror
        </div>
        <div class="form-group create-form">
            <label for="url" style="float:left;">書籍へのリンク(URL)</label>
            <input type="text" style="padding:25px;" class="form-control" id="url" name="url" placeholder="URLを入力">
            @error('url')
                    <p><span style="color:red;">{{$message}}</span></p>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-primary" style="margin-top:90px; padding:15px 20px;">登録ボタン</button>
    </form>
@endsection  