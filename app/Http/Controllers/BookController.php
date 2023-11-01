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

   
}
