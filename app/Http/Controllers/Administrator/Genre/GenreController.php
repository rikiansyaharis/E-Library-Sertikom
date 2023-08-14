<?php

namespace App\Http\Controllers\Administrator\Genre;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenreController extends Controller
{

    public function index() {
        $data = [
            'title' => 'Genre',
            'data' => Genre::latest()->get()
        ];

        return view('administrator.genre.index', $data);
    }

    public function create() {
        $data = [
            'title' => 'Tambah Genre',
            'action' => route('admin.genres.store'),
        ];
        return view('administrator.genre.form', $data);
    }

    public function store(Request $request)
      {
        try {
            Genre::create($request->only(['name']));
            createLog('Genre Baru Ditambahkan');
            return redirect()->route('admin.genres')->with('success', 'Genre berhasil ditambahkan');

        } catch(Exception $e){
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace(),
            ], 500);
        }
    }

    public function edit($id) {
        $data = [
            'data' => Genre::find($id),
            'title' => 'Edit Genre',
            'action' => route('admin.genres.update', $id),
        ];
        return view('administrator.genre.form', $data);
    }

    public function update(Request $request) {

        $data = Genre::find($request->id);
        try {
            Genre::where('id', $request->id)->update($request->only(['name']));
            createLog('Genre Telah Diedit');
            return redirect()->route('admin.genres')->with('success', 'Genre berhasil Diedit');
        } catch(Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace(),
            ], 500);
        }
    }

    public function delete($id) {
        Genre::where('id', $id)->delete();
        createLog('Genre Telah Dihapus');
        return redirect()->route('admin.genres')->with('success', 'Genre berhasil dihapus');
    }
}
