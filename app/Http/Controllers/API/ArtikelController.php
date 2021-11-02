<?php

namespace App\Http\Controllers\API;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Validator;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::get();
        return response()->json($artikel, 200);
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
            'user_id' => 'required|integer',
            'judul' => 'required',
            'content' => 'required',
            'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors());
        }

        $uploadFolder = "image/artikel/";
        $image = $request->file('image');
        $imageName = time().'-'.$image->getClientOriginalName();
        $image->move(public_path($uploadFolder), $imageName);
        $image_link = $uploadFolder.$imageName;
        

        $artikel = Artikel::create([
            'user_id' => $request->user_id,
            'judul' => $request->judul,
            'content' => $request->content,
            'image' => $image_link
         ]);

         return response()->json([
             "artikel" => $artikel,
            "image" => URL::to($image_link)
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
    public function edit($id)
    {
        
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
        $validator = Validator::make($request->all(), 
        [
            'user_id' => 'required|integer',
            'judul' => 'required',
            'content' => 'required',
            'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors());
        }

        $uploadFolder = "image/artikel/";
        $image = $request->file('image');
        $imageName = time().'-'.$image->getClientOriginalName();
        $image->move(public_path($uploadFolder), $imageName);
        $image_link = $uploadFolder.$imageName;

        $artikel = Artikel::where('id', $id)->update([
            'user_id' => $request->user_id,
            'judul' => $request->judul,
            'content' => $request->content,
            'image' => $image_link
         ]);

        $artikel_data = Artikel::where('id', $id)->get();

         return response()->json([
             "artikel" => $artikel_data,
            "image" => URL::to($image_link)
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();

        return response()->json("Data berhasil dihapus");
    }
}
