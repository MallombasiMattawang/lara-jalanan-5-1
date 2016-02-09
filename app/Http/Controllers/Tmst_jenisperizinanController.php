<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tmst_jenisperizinan;
use App\Tref_aktifperizinan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Tmst_jenisperizinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        //$tmst_jenisperizinan = \App\Tmst_jenisperizinan::where('nm_jenis_perizinan', 'like', '%cek%')->get();

        //$tmst_jenisperizinan = \DB::table('tmst_jenisperizinans')
          //  ->join('tref_aktifperizinans', 'tmst_jenisperizinans.tref_aktifperizinan_id','=','tref_aktifperizinans.id')
            //->select('tmst_jenisperizinans.nm_jenis_perizinan', 'tref_aktifperizinans.nm_aktif_perizinan')
            //->get();
        $tmst_jenisperizinan = Tmst_jenisperizinan::paginate(1);
        //return $tmst_jenisperizinan;
        //$data['tmst_jenisperizinan']=$tmst_jenisperizinan;
        //$tmst_jenisperizinan = Tmst_jenisperizinan::paginate(7);
        $data['tmst_jenisperizinan'] = $tmst_jenisperizinan->setPath('tmst_jenisperizinan');
        //print_r($tmst_jenisperizinan);
        return view('tmst_jenisperizinan.index',$data);

    }
    public function getOptionsPaginatedAttribute()
    {
        return $this->options()->paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('tmst_jenisperizinan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
