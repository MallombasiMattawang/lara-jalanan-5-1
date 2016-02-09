<?php

namespace App\Http\Controllers;

use App\Tref_pilihanrincian;
use Illuminate\Http\Request;
use App\Tref_rincianizin;
use App\Http\Requests;
use App\Http\Requests\Parameter;
use Session;
use App\Http\Controllers\Controller;

class Tref_rincianizinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $tref_rincianizin = Tref_rincianizin::paginate(10);
        $data['tref_rincianizin'] = $tref_rincianizin->setPath('tref_rincianizin');
        return view('tref_rincianizin.index', $data);
    }
    public function search(Request $request)
    {
        $keyword = $request['keyword'];
        $tref_rincianizin = Tref_rincianizin::where('name','LIKE','%'.$keyword.'%')->paginate(10);

        $data['tref_rincianizin'] = $tref_rincianizin->setPath('tref_rincianizin');
        return view('tref_rincianizin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tref_rincianizin.create');
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
        $tref_rincianizin = Tref_rincianizin::create($data);
        Session::flash('flash_message', 'Berhasil Tersimpan');

        //return redirect('tref_rincianizin');
        return redirect(route('tref_rincianizin.show', $tref_rincianizin));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $pilihanrincian = \DB::table('tref_pilihanrincians')
            ->join('tref_rincianizins', 'tref_rincianizins.id','=','tref_pilihanrincians.tref_rincianizin_id')
            ->select('tref_pilihanrincians.name',
                        'tref_pilihanrincians.id',
                        'tref_pilihanrincians.created_at')
            ->where('tref_rincianizins.id','=',$id)
            ->get();
        $data['pilihanrincian']=$pilihanrincian;


        $data['tref_rincianizin'] = Tref_rincianizin::find($id);
        return view('tref_rincianizin.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data['tref_rincianizin'] = Tref_rincianizin::find($id);
        return view('tref_rincianizin.edit', $data);
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
        $tref_rincianizin = Tref_rincianizin::find($id);
        $tref_rincianizin->update($data);

        return redirect('tref_rincianizin.show'.$id);
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
            $tref_pilihanrincian = Tref_pilihanrincian::find($id);
            $tref_pilihanrincian->delete();
             Session::flash('flash_message', 'Pilihan Berhasil Dihapus');
            return redirect('tref_rincianizin/'.$tref_pilihanrincian->tref_rincianizin_id);
        }else{
            $tref_rincianizin = Tref_rincianizin::find($id);
            $tref_rincianizin->delete();
             Session::flash('flash_message', 'Berhasil Dihapus');
            return redirect('tref_rincianizin');
        }

    }

    public function pilihanrincian(Request $request)
    {
        $data = $request->all();
        Tref_pilihanrincian::create($data);
        Session::flash('flash_message', 'Pilihan Rincian Berhasil Tersimpan');
        return redirect('tref_rincianizin/'.$request->tref_rincianizin_id);

    }
}
