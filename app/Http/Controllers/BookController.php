<?php

namespace App\Http\Controllers;

use Doctrine\ORM\Query\Expr\Select;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
   public function index(Request $request)
   {
      $items = DB::select('select * from books');
    //   $items = DB::table('people')->orderBy('age', 'asc')->get();
      return view('book.index', ['items' => $items]);
   }

   public function post(Request $request)
   {
      $items = DB::select('select * from books');
      return view('book.index', ['items' => $items]);
   }

   public function add(Request $request)
   {
      return view('book.add');
   }

   public function create(Request $request)
   {
     $param = [
         'ISBN10' => $request->ISBN10,
         'title' => $request->title,
         'author' => $request->author,
         'publisher' => $request->publisher,
         'price' => $request->price
     ];
     DB::insert('insert into books(ISBN10, title, author, publisher, price) values(:ISBN10, :title, :author, :publisher, :price)', $param);
      return redirect('/book');
   }

   public function edit(Request $request) {
      $param =['ISBN10' => $request->ISBN10];
      $item = DB::select('select * from books where ISBN10 = :ISBN10', $param);
      return view('book.edit', ['form' => $item[0]]);
   }

   public function update(Request $request) {
      $param = [
         'ISBN10' =>$request->ISBN10,
         'title' =>$request->title,
         'author' =>$request->author,
         'publisher' =>$request->publisher,
         'price' =>$request->price,
      ];
      DB::update('update books set ISBN10 =:ISBN10, title =:title, author =:author, publisher =:publisher, price =:price where ISBN10 = :ISBN10', $param);
      return redirect('/book');
   }
}
