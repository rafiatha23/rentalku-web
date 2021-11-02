<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kategori = request()->kategori_id;
        $tahun = request()->tahun;
        $filter_count = count($request->all());
        if($filter_count > 0){

            $kendaraan = Kendaraan::with('user')->orWhere('kategori_id', $kategori)->orWhere('tahun', $tahun)->get();
        }else{
            $kendaraan = Kendaraan::with('user')->get();
        }
        foreach($kendaraan as $k){
            $k->image_link_server = URL::to($k->image_link);
        }
        
        return response()->json($kendaraan, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name' => 'required',
            'user_id' => 'required|integer',
            'kategori_id' => 'required|integer',
            'nopol' => 'required',
            'seat' => 'required',
            'harga' => 'required|integer',
            'tahun' => 'required|integer',
            'image_link' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors());
        }

        $uploadFolder = "image/car/";
        $image = $request->file('image_link');
        $imageName = time().'-'.$image->getClientOriginalName();
        $image->move(public_path($uploadFolder), $imageName);
        $image_link = $uploadFolder.$imageName;
        

        $kendaraan = Kendaraan::create([
            'user_id' => $request->user_id,
            'kategori_id' => $request->kategori_id,
            'name' => $request->name,
            'nopol' => $request->nopol,
            'seat' => $request->seat,
            'harga' => $request->harga,
            'tahun' => $request->tahun,
            'image_link' => $image_link
         ]);

         return response()->json([
             "kendaraan" => $kendaraan,
            "image_link" => URL::to($image_link)
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name' => 'required',
            'user_id' => 'required|integer',
            'kategori_id' => 'required|integer',
            'nopol' => 'required',
            'seat' => 'required',
            'harga' => 'required|integer',
            'tahun' => 'required|integer',
            'image_link' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors());
        }

        $uploadFolder = "image/car/";
        $image = $request->file('image_link');
        $imageName = time().'-'.$image->getClientOriginalName();
        $image->move(public_path($uploadFolder), $imageName);
        $image_link = $uploadFolder.$imageName;
        

        $kendaraan = Kendaraan::where('id',$id)->update([
            'user_id' => $request->user_id,
            'kategori_id' => $request->kategori_id,
            'name' => $request->name,
            'nopol' => $request->nopol,
            'seat' => $request->seat,
            'harga' => $request->harga,
            'tahun' => $request->tahun,
            'image_link' => $image_link
         ]);

         $kendaraan_data = Kendaraan::where('id',$id)->get();
         return response()->json([
             "kendaraan" => $kendaraan_data,
            "image_link" => URL::to($image_link)
        ],201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        if($kendaraan){
            $kendaraan->delete();
        }else{
            return response()->json("Data gagal di hapus");
        }
        

        return response()->json("Data berhasil dihapus");
    }
}
