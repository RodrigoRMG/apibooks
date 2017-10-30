<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Book;
use App\Http\Requests\BookRequest;

Use App\BorrowBook;

class BooksController extends Controller
{

	public function index()
    {
    	$books=Book::with('category')->get();
    	return response()->json($books,200);
    }


    public function show($id)
    {
        $book=Book::find($id);
        if($book)
        {
            return response()->json($book,200);
        }else{
            return response()->json(['error'=>'Not found'],404);
        }
        
    }
    
    public function store(BookRequest $request)
    {
        $book = Book::create($request->all());
        return response()->json($book,200);
    }


    public function update(BookRequest $request, $id)
    {
    	$book=Book::find($id);
        $book->update($request->all());
        return response()->json($book,200);
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return response()->json('ok',200);
    }

    public function setAvailable(BookRequest $request)
    {
        $book=Book::find($request->book_id);
        $book->status=0;
        $book->save();

    }
    public function setBorrowed(BookRequest $request)
    {
        $book=Book::find($request->book_id);
        if($book)
        {
            $borrow=new BorrowBook;
            $borrow->book_id=$request->book_id;
            $borrow->user_id=$request->user_id;

            if($borrow->save())
            {
                $book->status=1;
                $book->save();
                return response()->json('ok',200);
            }else{
                return response()->json(['error'=>'Not found'],500);
            }

           
            return response()->json('ok',200);
        }else{
            return response()->json(['error'=>'Not found'],404);
        }
        
    }
}
