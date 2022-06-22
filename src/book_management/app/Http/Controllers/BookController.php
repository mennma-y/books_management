<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Facade\Ignition\QueryRecorder\Query;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    public function index(Request $request){
        
        //キーワード検索
        $keyword = $request->keyword;

        $query = \App\Book::query();

        if(!empty($keyword)){
            $query->where('url','like','%'.$keyword.'%');
            $query->orWhere('title','like','%'.$keyword.'%');
        }
        //本の情報全件取得
        $books = $query->where('status',1)->orderBy('created_at','desc')->paginate(6);
        return view('index',compact('books'))->with('keyword',$keyword);
    }

    public function create(){
        return view('create');
    }

    public function store(BookRequest $request){
        $data = $request->all();
        $book = Book::insertGetId([
            'title'=> $data['title'],
            'url'=>$data['url'],
        ]);
        
        session()->flash('status','新規登録が完了しました！');
        return redirect()->route('index');
    }

    public function edit($id){

        $book = Book::find($id);
        return view('edit',compact('book'));  
    }

    public function update(BookRequest $request , $id){
        $data = $request->all();
        $book = Book::where('id',$id)->update([
            'title'=> $data['title'],
            'url'=> $data['url'],
        ]);
        
        session()->flash('status','編集が完了しました！');
        return redirect()->route('index');  

    }

    public function delete($id){
        $book = Book::where('id',$id)->update([
            'status'=>0,
        ]);

        session()->flash('status','削除が完了しました！');
        return redirect()->route('index');
    }


}
