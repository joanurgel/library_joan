<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookFormRequest;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
    public function index()
    {
        
        $books = Book::paginate(5);
        return view ('admin.book.index', compact('books'));
    }
    public function create()
    {
        return view ('admin.book.create');
    }

    public function store(BookFormRequest $request)
    {
        $data =$request->validated();  

        $books = new Book;
        $books->name= $data['name'];

        if($request->hasfile('image')){
            $file =$request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/book/', $filename);
            $books->image = $filename;

        }
        $books->category= $data['category'];
       
        $books->save();
    
        return redirect ('admin/books')->with('message' , 'Name added successfully');

    }

    public function edit ($books_id)
    {
        $books = Book::find($books_id);
        return view('admin.book.edit' , compact('books'));
    }

    public function update (BookFormRequest $request, $books_id )
    {
        $data =$request->validated();  

        $books = Book::find($books_id);
        $books->name= $data['name'];

        if($request->hasfile('image')){
            $file =$request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/book/', $filename);
            $books->image = $filename;

        }
        $books->category= $data['category'];
        
        $books->update();
    
        return redirect ('admin/books')->with('message' , 'Books Updated successfully');      
    }

    public function destroy($books_id)
    {
        $books = Book::find($books_id);
        if($books_id)
        {
            // $destination = 'uploads/book/'. $books->image;
            // if (File::exists($destination)){
            //     File::delete($destination);
            // }
            $books->delete();
            return redirect ('admin/books')->with('message' , 'Books Deleted successfully');  
        }
        else
        {
            return redirect ('admin/books')->with('message' , 'No Books Id Found');  
        }

        // $books = Book::find($books_id);
        // if($books_id)
        // {
        //     $books->delete();
        //     return response('admin/books')->json(
                
        //     );
        // }
        // else 
        // {
        //     return response('admin/books')->json(
                
        //     );
        // }
    
    }


}
