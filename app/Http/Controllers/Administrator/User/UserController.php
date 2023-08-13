<?php

namespace App\Http\Controllers\Administrator\User;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $data = [
            'title' => 'User',
            'data' => User::all(),
            'role' => Role::all()
        ];
        return view('administrator.user.index', $data);
    }

    public function create() {
        $data = [
            'title' => 'Tambah User',
            'action' => route('admin.users.store'),
            'role' => Role::all()
        ];
        return view('administrator.user.form', $data);
    }

    public function store(Request $request)
      {
        try {
            $request->merge(['password' => Hash::make($request->password)]);
            User::create($request->only(['role_id','name','email', 'password']));
            createLog('User Baru Ditambahkan');
            return redirect()->route('admin.users')->with('success', 'User berhasil ditambahkan');

        } catch(Exception $e){
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace(),
            ], 500);
        }
    }

    public function edit($id) {
        $data = [
            'data' => User::find($id),
            'title' => 'Edit User',
            'action' => route('admin.users.update', $id),
            'role' => Role::all()
        ];
        return view('administrator.user.form', $data);
    }

    public function update(Request $request) {

        $data = User::find($request->id);
        try {
            User::where('id', $request->id)->update($request->only(['role_id','name','email']));
            createLog('User Telah Diedit');
            return redirect()->route('admin.users')->with('success', 'User berhasil Diedit');
        } catch(Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace(),
            ], 500);
        }
    }

    public function delete($id) {
        User::where('id', $id)->delete();
        createLog('User Telah Dihapus');
        return redirect()->route('admin.users')->with('success', 'User berhasil dihapus');
    }
}
