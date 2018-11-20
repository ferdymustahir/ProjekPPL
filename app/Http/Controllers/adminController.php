<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\barang;
use Auth;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function validasiRegist(Request $request)
    {
    $rules = [
      'nikdriver' => 'required|max:13|unique:users,nik',
      'namadriver' => 'required|string',
      'alamatdriver' => 'required',
      'nohpdriver' => 'required|string',
      'fotodriver' => 'required|mimes:jpeg,bmp,png,gif',
      'email' => 'required|string|email'
    ];
    return Validator::make($request->all(), $rules);
    }

    public function tambahDriver(Request $request){
        $validasi = $this->validasiRegist($request);
        if($validasi->passes())
    {
        $fileName   = $request->file('fotodriver')->getClientOriginalName();
        $request->file('fotodriver')->move("fotodriver/", $fileName);
        //dd($request);
        $insert = ([
              'nik' => $request->nikdriver,
              'name' => $request->namadriver,
              'alamat' => $request->alamatdriver,
              'nohp' => $request->nohpdriver,
              'email' => $request->email,
              'password' => Hash::make($request->password),
              'fotodriver' => $request->file('fotodriver')->getClientOriginalName(),
              'level' => '3',
              'jeniskelamin' =>'Laki-laki',
              'agama' => 'Islam',
              'fotoktp' => '',
              ]);
        User::create($insert);
        return redirect('viewdriver');
    }
    else{
        //dd($request);
        return Redirect::back()
            ->withErrors($validasi)
            ->withInput();
    }

    }

        public function barang(){
        $tampil = barang::all();
        return view('adminhome',compact('tampil'));
    }

    public function driver(){
        $tampil = User::where('level','=',3)->get();
        return view('driver',compact('tampil'));
    }

    public function viewaddriver(){
        return view('formdriver');
    }

    public function viewedit($id){
    	$view = User::where('id','=',$id)->first();
    	return view('editdriver',compact('view'));
    }

    public function dropdriver($id){
    	$check = User::where('id','=',$id)->first();
    	$check->delete();
    	return redirect('viewdriver');
    }

    public function editsave(Request $request, $id){
      $edit = User::where('id','=',$id)->first();
      
      $edit->alamat = $request->alamatdriver;
      $edit->nohp = $request->nohpdriver;
      $edit->save();
      return redirect('viewdriver');
    }
}
