<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Bunga;
use App\Transaksi;
use Validator;
use Illuminate\Http\Response;
use Session;
use Illuminate\Support\Facades\DB;

class BungaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $bunga = Bunga::all();
        return $bunga;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bung = new Bunga;
    	$bung->nama_bunga = $request->nama_bunga;
    	$bung->harga = $request->harga;
    	$bung->deskripsi = $request->deskripsi;
        $bung->jumlah = $request->jumlah;
        $bung->gambar = $request->gambar;
    	$bung->save();

        return response()->json($bung, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bung = Bunga::find($id);


        if (is_null($bung)) {
            return $this->sendError('Bunga not found.');
        }


        return response()->json($bung, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bunga $bung)
    {
        $input = $request->all();


        $validator = Validator::make($input, [
            'kode_bunga' => 'required',
            'nama_bunga' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'jumlah' => 'required',
            'gambar' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $bung->kode_bunga = $input['kode_bunga'];
        $bung->nama_bunga = $input['nama_bunga'];
        $bung->harga = $input['harga'];
        $bung->deskripsi = $input['deskripsi'];
        $bung->jumlah = $input['jumlah'];
        $bung->gambar = $input['gambar'];
        $bung->save();


        return $this->sendResponse($bung->toArray(), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bunga $bung)
    {
        Bunga::find($bung)->delete();


        return response()->json($bung, 204);
    }
}
