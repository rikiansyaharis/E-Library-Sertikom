<?php

namespace App\Http\Controllers\Administrator\Book;

use File;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Book',
            'data' => Book::latest()->get(),
            'genre' => Genre::all(),

        ];
        return view('administrator.book.index', $data);
    }


    public function detail($id) {
        $data = [
            'title' => 'Detail Buku',
            Genre::all(),
            'genre' => Genre::all(),
            'data' => Book::find($id),
        ];
        return view('administrator.book.detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Buku',
            'action' => route('admin.books.store'),
            'genres' => Genre::all(),

        ];
        return view('administrator.book.form', $data);
    }

    public function store(BookRequest $request)
    {
        try {
            if($request->hasFile('file_image')) {
                $file = $request->file('file_image');
                $path = public_path('storage/images/book');
                $imagename = 'books_'. rand(0, 9999999999) .'_'. rand(0, 9999999999) .'.'. $file->getClientOriginalExtension();
                $file->move($path, $imagename);
            }

            if($request->hasFile('file_book')) {
                $file = $request->file('file_book');
                $path = public_path('storage/file/book');
                $filename = 'file_'. rand(0, 999999999999) .'_'. rand(0, 999999999999) .'.'. $file->getClientOriginalExtension();
                $file->move($path, $filename);
            }
            $request->merge(['image' => $imagename, 'file' => $filename]);
            Book::create($request->only(['genre_id','image','name','author','number_of_pages','description', 'file', 'publication_years']));
            createLog('Menambahkan Buku Baru');
            return redirect()->route('admin.book')->with('success', 'Buku berhasil ditambahkan');

        } catch(Exception $e){
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace(),
            ], 500);
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Buku',
            'action' => route('admin.books.update', $id),
            'data' => Book::find($id),
            'genres' => Genre::all(),
        ];

        // dd($data);
        return view('administrator.book.form', $data);
    }

    public function update(BookRequest $request)
    {
        $data = Book::find($request->id);

        try {
            if($request->hasFile('file_image')) {
                $file = $request->file('file_image');
                $path = public_path('storage/images/book');
                $imagename = 'books_'. rand(0, 9999999999) .'_'. rand(0, 9999999999) .'.'. $file->getClientOriginalExtension();
                $file->move($path, $imagename);

                if(file_exists(public_path('storage/images/book/'. $data->image))){
                    File::delete(public_path('storage/images/book/'. $data->image));
                }
            } else {
                $imagename = $data->image;
            }

            if($request->hasFile('file_book')) {
                $file = $request->file('file_book');
                $path = public_path('storage/file/book');
                $filename = 'file_'. rand(0, 999999999999) .'_'. rand(0, 999999999999) .'.'. $file->getClientOriginalExtension();
                $file->move($path, $filename);

                if(file_exists(public_path('storage/file/book/'. $data->file))){
                    File::delete(public_path('storage/file/book/'. $data->file));
                }
            } else {
                $filename = $data->file;
            }

            $request->merge(['image' => $imagename, 'file' => $filename]);
            Book::where('id', $request->id)->update($request->only(['genre_id','image','name','author','number_of_pages','description', 'file', 'publication_years']));
            createLog('Mengedit Buku');
            return redirect()->route('admin.book')->with('success', 'Buku berhasil diupdate');

        } catch(Exception $e){
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace(),
            ], 500);
        }
    }

    public function delete($id)
    {
        $data = Book::find($id);
        try {
            if(file_exists(public_path('storage/images/book/'. $data->image))){
                File::delete(public_path('storage/images/book/'. $data->image));
            }
            if(file_exists(public_path('storage/file/book/'. $data->file))){
                File::delete(public_path('storage/file/book/'. $data->file));
            }
            $data->delete();
            createLog('Menghapus Buku');
            return redirect()->route('admin.book')->with('success', 'Buku berhasil Dihapus');

        } catch(Exception $e){
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace(),
            ], 500);
        }
    }

}
