<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //Danh sách
    public function index(){
        $books = DB::table('books')
        ->join('categories', 'category_id', '=', 'categories.id')
        ->select('books.*', 'name')
        ->orderByDesc('id')
        ->get();
        return view('books.index', compact('books'));
    }
    //Hiển thị form create
    public function create(){
        $categories = DB::table('categories')->get();
        return view('books.create', compact('categories'));
    }
    //Lưu dữ liệu của form create
    public function store(Request $request){
        // $data = $request->except('_token');
        // dd($data);
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id'],
        ];
        DB::table('books')->insert($data);
        return redirect()->route('book.index');
    }
    //Xoá sách
    public function destroy($id){
        DB::table('books')->delete($id);
        return redirect()->route('book.index');
    }

    //Hiển thị form cập nhập sách
    public function edit($id){
        $book = DB::table('books')
        ->where('id', $id)
        ->first();
        // dd($book);
        $categories = DB::table('categories')->get();
        return view('books.edit', compact('book', 'categories'));
    }
    //Cập nhập dữ liệu
    public function update(Request $request){
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id'],
        ];
        DB::table('books')->where('id', $request['id'])->update($data);
        return redirect()->route('book.index');
    }
}
