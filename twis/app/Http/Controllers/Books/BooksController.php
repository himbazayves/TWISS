<?php


namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;





class BooksController extends Controller
{
    function index(){

        $books= Book::all();

        return view('books.index',['books'=>$books]);
    }
}
