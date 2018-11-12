<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function lihat(Request $request){
    	$view = User::where('id','=',Auth::User()->id)->first();
    	return view('auth.user', compact('view'));
    }

    public function viewedit(Request $request){
    	$profil = User::where('id','=',Auth::User()->id)->first();
    	return view('auth.edituser',compact('profil'));
    }

    public function storeedit(Request $request){
    	$profil = User::where('id','=',Auth::User()->id)->first();
    	//dd($request);
    	$profil->name = $request->name;
    	$profil->alamat = $request->alamat;
    	$profil->jeniskelamin = $request->jeniskelamin;
    	$profil->agama = $request->agama;
    	$profil->nohp = $request->nohp;
    	$profil->save();

    	return redirect('user');

    }

    public function viewBeli(){
        $view = DB::table('pembelian')
            ->join('barang', 'pembelian.idbarang', '=', 'barang.id')
            ->join('users', 'pembelian.iduser', '=', 'users.id')
            ->select('pembelian.*', 'barang.*', 'users.name', DB::raw('jumlah*harga as total'))
            ->where('pembelian.iduser','=',Auth::User()->id)
            ->orderBy('pembelian.created_at', 'asc')
            ->get();

        return view('keranjang',compact('view'));
    }
}
