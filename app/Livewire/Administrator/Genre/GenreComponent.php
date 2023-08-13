<?php

namespace App\Livewire\Administrator\Genre;

use App\Models\Genre;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Rule;

class GenreComponent extends Component
{

    #[Rule('required|min:3')]
    public $name;

    public $genre_id;
    public $updateMode = false;
    public $search = '';

    public function render()
    {
        $data = [
            'title' => 'Genre',
            'data' => Genre::latest()->where('name','Like','%'. $this->search .'%')->get()
        ];

        return view('livewire.administrator.genre.genre-component', $data)->extends('administrator.layouts.main')->section('content');
    }

    private function resetInputFields()
    {
        $this->name = '';
    }

    public function create(Request $request)
    {
        $validateData = $this->validate([
            'name' => 'required',
        ]);

        Genre::create([
            'name' => $this->name,
        ]);

        createLog('Meanmbahkan Genre Baru');
        session()->flash('success', 'Brand created successfully!');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $data = Genre::where('id',$id)->first();
        $this->genre_id = $id;
        $this->name = $data->name;

    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
        ]);

        if ($this->genre_id) {
            $data = Genre::find($this->genre_id);
            $data->update([
                'name' => $this->name,
            ]);
            createLog('Mengedit Genre');
            $this->updateMode = false;
            session()->flash('success', 'Brand updated successfully!.');
            $this->resetInputFields();

        }

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function delete($id)
    {
        if($id){
            Genre::where('id',$id)->delete();
            createLog('Menghapus Genre');
            session()->flash('success', 'Users Deleted Successfully.');
        }
    }
}
