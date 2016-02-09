<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tref_dataperusahaan;
use App\Tref_pilihanperusahaan;
use App\Http\Requests;

use App\Http\Requests\Parameter;
use Session;
use App\Http\Controllers\Controller;

class Tref_dataperusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $tref_dataperusahaan = Tref_dataperusahaan::paginate(10);
        $data['tref_dataperusahaan'] = $tref_dataperusahaan->setPath('tref_dataperusahaan');
        return view('tref_dataperusahaan.index', $data);
    }
    public function search(Request $request)
    {
        $keyword = $request['keyword'];
        $tref_dataperusahaan = Tref_dataperusahaan::where('name','LIKE','%'.$keyword.'%')->paginate(10);

        $data['tref_dataperusahaan'] = $tref_dataperusahaan->setPath('tref_dataperusahaan');
        return view('tref_dataperusahaan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tref_dataperusahaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Parameter $request)
    {
        $data = $request->all();
        $tref_dataperusahaan = Tref_dataperusahaan::create($data);
        Session::flash('flash_message', 'Berhasil Tersimpan');
        return redirect(route('tref_dataperusahaan.show', $tref_dataperusahaan));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $pilihanperusahaan = \DB::table('tref_pilihanperusahaans')
            ->join('tref_dataperusahaans', 'tref_dataperusahaans.id','=','tref_pilihanperusahaans.tref_dataperusahaan_id')
            ->select('tref_pilihanperusahaans.name',
                'tref_pilihanperusahaans.id',
                'tref_pilihanperusahaans.created_at')
            ->where('tref_dataperusahaans.id','=',$id)
            ->get();
        $data['pilihanperusahaan']=$pilihanperusahaan;

        $data['tref_dataperusahaan'] = Tref_dataperusahaan::find($id);
        return view('tref_dataperusahaan.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data['tref_dataperusahaan'] = Tref_dataperusahaan::find($id);
        return view('tref_dataperusahaan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Parameter $request, $id)
    {
        $data = $request->all();
        $tref_dataperusahaan = Tref_dataperusahaan::find($id);
        $tref_dataperusahaan->update($data);
        Session::flash('flash_message', 'Berhasil Diubah');
        return redirect('tref_dataperusahaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        //$data = $request->all();
        $cek_pilihan = $request->cek_pilihan;
        if ($cek_pilihan =='yes'){
            $tref_pilihanperusahaan = Tref_pilihanperusahaan::find($id);
            $tref_pilihanperusahaan->delete();
            Session::flash('flash_message', 'Pilihan Berhasil Dihapus');
            return redirect('tref_dataperusahaan/'.$tref_pilihanperusahaan->tref_dataperusahaan_id);
        }else{
            $tref_dataperusahaan = Tref_dataperusahaan::find($id);
            $tref_dataperusahaan->delete();
            Session::flash('flash_message', 'Berhasil Dihapus');
            return redirect('tref_dataperusahaan');
        }
    }

    public function pilihanperusahaan(Request $request)
    {
        $data = $request->all();
        Tref_pilihanperusahaan::create($data);
        Session::flash('flash_message', 'Pilihan Data Perusahaan Berhasil Tersimpan');
        return redirect('tref_dataperusahaan/'.$request->tref_dataperusahaan_id);

    }
}
