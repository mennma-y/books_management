@extends('layouts.app')

@section('title','書籍一覧画面')


@section('content')
    @if (session('status'))
        <div class="alert alert-success" style="padding: 25px; width:80%; margin:30px auto;" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="main-title">
        <h2 style="margin-bottom: 30px;">書籍一覧</h2>
    </div>
    <form method="GET">
        @csrf
        <div class="form-group search-box">
            <input  type="text" class="form-control keyword" id="keyword" name="keyword" value="{{$keyword}}" placeholder="キーワード">
            <button type="submit" class="btn btn-primary keyword-button">検索ボタン</button>
        </div>
    </form>
        
    @foreach($books as $book)
        <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$book->title}}</h4>
                    <a style="font-size:15px;" href="{{$book->url}}">{{$book->url}}</a>
                    <a href="{{route('edit',$book['id'])}}" class="btn btn-primary" style="padding: 10px;">編集ボタン</a>
                </div>
        </div>
    @endforeach
    
    <!-- ページネーションを追加 -->
    <div style="width: 10%; margin:50px auto;">  
        {!! $books->appends(['keyword'=>$keyword])->render()!!}
    </div>
    
@endsection
