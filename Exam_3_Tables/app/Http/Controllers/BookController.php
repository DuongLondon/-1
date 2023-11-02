<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all()->sortByDesc('id');
        return view('books.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Title'=>'required',
            'Author'=> 'required',
            'Genre'=> 'required',
            'PubliccationYear'=> 'required',
            'ISBN'=> 'required',
            'CoverImageURL'=> 'required',
        ]);
        Book::create($request->all());
        return redirect()->route('books.index')->with('success','Book create success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $book = Book::find($book->id);
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'Title'=>'required',
            'Author'=> 'required',
            'Genre'=> 'required',
            'PubliccationYear'=> 'required',
            'ISBN'=> 'required',
            'CoverImageURL'=> 'required',
        ]);
        $book = Book::find($book->id);
        $book->update($request->all());
        return redirect()->route('books.index')->with('successful','Book updated success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
         $book = Book::find($book->id);
        $book->reviews()->delete();
        $book->delete();
        return redirect()->route('books.index')->with('successfully','Book deleted successful');
    }
}
