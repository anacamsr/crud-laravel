<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class BookController extends Controller
{
    private $objUser;
    private $objBook;
    
    public function __construct()
    {
        $this->objUser = new User();
        $this->objBook = new Book();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = $this->objBook->all()->sortBy('title');
        return view('lista', compact('book'));
        // dd($this->objUser->find(1)->relBooks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view ('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'id_user' => 'required|exists:users,id',
        ]);

        Book::create($validatedData);

        return redirect()->route('books.index')->with('success', 'Book created successfully!');
    
        // $this->objBook->create([
        //     'title'=>$request->title,
        //     'price'=>$request->price,
        //     'id_user'=>$request->id_user

        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $book = $this->objBook->find($id);
        // return view('visualizar',compact('book'));
        $book = Book::find($id); // Retrieve a specific book by ID
        return view('visualizar', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=$this->objUser->all();
        // $book = $this->objBook->find($id);
        // return view('create', compact('book', 'users'));
        $book = Book::find($id); // Retrieve the book to be edited by its ID

        if (!$book) {
            return redirect()->route('books.index')->with('error', 'Book not found!');
        }
    
        return view('create', compact('book', 'users')); // Pass the book data to the 'edit' view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}