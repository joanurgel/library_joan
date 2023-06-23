<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\Record;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\RecordFormRequest;

class RecordController extends Controller
{
    public function index()
    {

        $record = Record::paginate(5);
        return view('admin.record.index' , compact('record'));
    }

   
    public function create()
    {

       $books = Book::where('category')->get();
        return view('admin.record.create' , compact('books'));
    }

    public function store(RecordFormRequest $request)
    {
        $data = $request->validated();

        $record = new Record;
        // $record ->categoryy =$data['categoryy'];
        $record ->books_category =$data['books_category'];
        $record ->books_title =$data['books_title'];
        $record ->author =$data['author'];
        $record ->status =$data['status'];
        $record ->save();

        return redirect ('admin/record')->with('message' , 'Record Added successfully');  
    }
    public function edit ($record_id)
    {
        
        $record = Record::find($record_id);
        return view('admin.record.edit' , compact ('record'));
    }

    public function update (RecordFormRequest $request, $record_id)
    {
        $data = $request->validated();

        $record = Record::find($record_id);
        $record ->books_category =$data['books_category'];
        $record ->books_title =$data['books_title'];
        $record ->author =$data['author'];
        $record ->status =$data['status'];
        $record ->update();

        return redirect ('admin/record')->with('message' , 'Record Updated successfully');

    }

    public function destroy($record_id)
    {
        $record = Record::find($record_id);     
        $record->delete();
        return redirect ('admin/record')->with('message' , 'Record Deleted successfully');
    }

}