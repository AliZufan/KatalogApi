<?php

namespace App\Http\Controllers;

use App\Car;
use DataTables;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @Route  base_url/api/mobil, Method -> GET
     * 
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $data = Car::all();

        if (!empty($data)) {
            return response()->json([
                'success' => true,
                'message' => 'Semua Data Ditemukan!',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Semua Data Tidak Ditemukan!',
                'data' => 'Not Entry'
            ], 404);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @Route  base_url/api/mobil/$brand/$type , Method -> GET
     * 
     * @param  SQL_Where_To_field_merek $brand
     * @param  SQL_Where_To_field_tipe $type -> default value null
     * @return \Illuminate\Http\Response
     */
    public function showOne($brand, $type='')
    {
        if(!empty($type)) {
            $data = Car::where(['merek' => $brand, 'tipe' => $type])->get();
        } else {
            $data = Car::where('merek', $brand)->get();
        }

        if (!empty($data)) {
            return response()->json([
                'success' => true,
                'message' => 'Data Ditemukan!',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan!',
                'data' => 'Not Entry'
            ], 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @Route  base_url/api/mobil , Method -> POST
     * @insert With Form Data, list field => "merek", "tipe", "tahun", "nmr_kerangka", "nmr_polisi"
     * 
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (!empty($request->all())) {
            $data = Car::create($request->all());
            if (!empty($data)) {
                return response()->json([
                    'success' => true,
                    'message' => 'Data Telah Dibuat!',
                    'data' => $data
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Data Gagal Dibuat!',
                ], 400);
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @Route  base_url/api/mobil/$nmrKerangka , Method -> PUT
     * 
     * @param  SQL_Where_To_field_nmr_kerangka $nmrKerangka -> tipe unique
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update( $nmrKerangka, Request $request, Car $car)
    {
        if (!empty($request->all())) {
            $data = $car->where('nmr_kerangka', $nmrKerangka)->update($request->all());
            if (!empty($data)) {
                return response()->json([
                    'success' => true,
                    'message' => 'Data Berhasil diupdate!',
                    'data' => [
                        'nmr_kerangka'=> $nmrKerangka,
                        'update_field'=> $request->all()
                    ]
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Data Gagal diupdate!',
                    'data' => [
                        'nmr_kerangka'=> $nmrKerangka
                    ]
                ], 400);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Tolong Isi Form dengan Benar!',
                'data' => $request->all()
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @Route  base_url/api/mobil/$nmrKerangka , Method -> DELETE
     * 
     * @param  SQL_Where_To_field_nmr_kerangka $nmrKerangka -> tipe unique
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy( $nmrKerangka )
    {
        $data = Car::where('nmr_kerangka',$nmrKerangka)->first();

        if(!empty($data)) {
            $data->delete();
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Dihapus!',
                'data' => [
                    'nmr_kerangka'=>  $nmrKerangka,
                    'deleted' => $data
                ]
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Dihapus!',
                'data' => [
                    'nmr_kerangka'=>  $nmrKerangka,
                ]
            ]);
        }
    }
}
