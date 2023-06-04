<?php

namespace App\Http\Controllers;
use App\Models\Latihan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LatihanController extends Controller
{
    public function show()
    {
        return view('latihan', [
            "show_latihan" => Latihan::all()
        ]);
    }
    public function create(Request $request): RedirectResponse
    {
        $create_latihan = new Latihan;
 
        $create_latihan->nama = $request->nama;
        $create_latihan->nim = $request->nim;
        $create_latihan->prodi = $request->prodi;
 
        $create_latihan->save();
 
        return redirect('/');
    }

    public function delete($id)
    {
        $delete_latihan = Latihan::find($id);
 
        $delete_latihan->delete();
        return redirect('/');
    }
    
    public function update_form(Request $request, $id)
    {
        $update_latihan = Latihan::findOrFail($id);
        $update_latihan->nama = $request->update_nama;
        $update_latihan->nim = $request->update_nim;
        $update_latihan->prodi = $request->update_prodi;
 
        $update_latihan->update();
        return redirect('/');


    }
}
