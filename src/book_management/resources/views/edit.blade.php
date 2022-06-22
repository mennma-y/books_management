@extends('layouts.app')

@section('title','書籍編集画面')

@section('content')
    <div class="register-title">
        <h2>書籍情報の編集</h2>
    </div>

    <form method="POST"  action="{{route('delete',$book['id'])}}">
        @csrf
        <div class="danger-button">
            <button type="submit" class="btn btn-danger" style="padding:12px 25px;">削除</button>    
        </div>
    </form>

    <form method="POST" action="{{route('update',$book['id'])}}">
        @csrf
        <div class="form-group edit-form">
            <label for="title" style="float: left;">タイトル</label>
            <input type="text" style="padding:25px;" class="form-control" id="title" name="title" value="{{$book->title}}">
            
        </div>
        <div class="form-group edit-form">
            <label for="url" style="float:left;">書籍へのリンク(URL)</label>
            <input type="text" style="padding:25px;" class="form-control" id="url" name="url" value="{{$book->url}}">
        </div>
    
        <button type="submit" class="btn btn-primary" style="margin-top:90px; padding:15px 20px;">更新ボタン</button>
    </form>
@endsection  