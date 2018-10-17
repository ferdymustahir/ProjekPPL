<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use Illuminate\Support\Facades\Validator;
use Redirect;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahbarang()
    {
        return view('tambahBarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpanBarang(Request $request)
    {
        $validator = $this->validator($request);
        if($validator->passes())
    {
        $fileName   = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move("img/", $fileName);
        $insert = ([
              'jenis_kayu' => $request->jenis_kayu,
              'stok' => $request->stok,
              'harga' => $request->harga,
              'deskripsi' => $request->deskripsi,
              'gambar' => $request->file('gambar')->getClientOriginalName(),
              ]);
        //dd($insert);
          barang::create($insert);
        return redirect('home');
    }
    else{
        //dd($request);
        return Redirect::back()
            ->withErrors($validator)
            ->withInput();
    }
    }

    public function viewEdit($id){
        $view = barang::find($id);
        return view('editBarang', compact('view'));
    }

    public function editBarang(Request $request, $id)
    {
        $validator = $this->validator($request);
        if($validator->passes())
    {

        $edit = barang::find($id);

        $edit->jenis_kayu= $request->jenis_kayu;
        $edit->stok= $request->stok;
        $edit->harga= $request->harga;
        $edit->deskripsi= $request->deskripsi;
        
        if($request->file('gambarbarang')==""){
        $edit->gambar = $edit->gambar;
        }
        else{
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("img/", $fileName);
        $edit->gambarbarang = $request->file('gambar')->getClientOriginalName();
        }

        $edit->save();
        return redirect('home');
    }
    else{
        //dd($request);
        return Redirect::back()
            ->withErrors($validator)
            ->withInput();
    }
    }

    public function validator(Request $request)
    {
    $rules = [
      'jenis_kayu' => 'required|string',
      'stok' => 'required|integer',
      'harga' => 'required|integer',
      'deskripsi' => 'required|string',
      'gambar' => 'mimes:jpeg,bmp,png,gif'
    ];
    return Validator::make($request->all(), $rules);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('barang');
    }

    public function hapusBarang($id){
        $edit= barang::find($id);
        $edit->delete();
        return redirect('home');
  }
}
