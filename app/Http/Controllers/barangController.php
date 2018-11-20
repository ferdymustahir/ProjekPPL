<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use Illuminate\Support\Facades\Validator;
use Redirect;
use App\pembelian;
use App\pembayaran;
use Auth;
use Illuminate\Support\Facades\DB;

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
        return redirect('viewbarang');
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

  public function beliBarang(Request $request, $id)
  {
    pembelian::create([
          'idbarang' => $id,
          'iduser' => Auth::User()->id,
          'jumlah' => $request->jumlah,
          ]);
    $barang = barang::where('id','=',$id)->first();
    $barang->stok = $barang->stok - $request->jumlah;
    $barang->save();
    return redirect('/keranjang1');
  }


   public function keranjang(Request $request,$id)
    {
           $insert = ([
          'idbarang' =>$id,
          'iduser' => Auth::user()->id,
          'jumlah' => $request->jumlah,
          

          
          ]);
           pembelian::create($insert);

        return Redirect::back();
    }

    public function lihatKeranjang(Request $request)
    {


            $lihat = DB::table('pembelian')
            ->join('barang', 'pembelian.idbarang', '=', 'barang.id')
            ->select('pembelian.*', 'barang.*', DB::raw('jumlah*harga as total'))
            ->where('pembelian.iduser','=',Auth::user()->id)
            ->get();

       


        return view('keranjang', compact('lihat'));
    }

    public function bayarbarang(Request $request, $id)
    {
        // $fileName   = $request->file('struk')->getClientOriginalName();
        // dd($fileName);
        // $request->file('struk')->move("img/", $fileName);
        // $insert = ([
        //       'idPembelian' => $request->$id,
        //       'struk' => $request->file('struk')->getClientOriginalName(),
        //       ]);
        // //dd($insert);
        // pembayaran::create($insert);
        // return redirect('keranjang');

// dd('masuk');
      $struk = $request->file('struk');
      $input['namefile'] = time().'-'.$struk->getClientOriginalName();
      $tempat = public_path('img');
      $struk->move($tempat,$input['namefile']);

        $insert = ([
          'struk' => $input['namefile']
        ]);
          $pembayaran=pembayaran::create($insert);

// dd($id);
          $edit = pembelian::where('id',$id)->first();
        $edit->status= 'Sedang diproses';
        $edit->idPembayaran= $pembayaran->id;
        

        $edit->save();
        return redirect('keranjang1');

    }



}
