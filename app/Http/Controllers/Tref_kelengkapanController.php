<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tref_kelengkapan;
use App\Http\Requests;
use App\Http\Requests\Parameter;
use Session;
use App\Http\Controllers\Controller;

class Tref_kelengkapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $tref_kelengkapan = Tref_kelengkapan::paginate(10);
        $data['tref_kelengkapan'] = $tref_kelengkapan->setPath('tref_kelengkapan');
        return view('tref_kelengkapan.index', $data);
    }
    public function search(Request $request)
    {
        $keyword = $request['keyword'];
        $tref_kelengkapan = Tref_kelengkapan::where('name','LIKE','%'.$keyword.'%')->paginate(10);

        $data['tref_kelengkapan'] = $tref_kelengkapan->setPath('tref_kelengkapan');
        return view('tref_kelengkapan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tref_kelengkapan.create');
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
        Tref_kelengkapan::create($data);
        Session::flash('flash_message', 'Berhasil Tersimpan');
        return redirect('tref_kelengkapan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $data['tref_kelengkapan'] = Tref_kelengkapan::find($id);
        return view('tref_kelengkapan.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data['tref_kelengkapan'] = Tref_kelengkapan::find($id);
        return view('tref_kelengkapan.edit', $data);
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
        $tref_kelengkapan = Tref_kelengkapan::find($id);
        $tref_kelengkapan->update($data);
        Session::flash('flash_message', 'Berhasil Diubah');
        return redirect('tref_kelengkapan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $tref_kelengkapan = Tref_kelengkapan::find($id);
        $tref_kelengkapan->delete();
        Session::flash('flash_message', 'Berhasil Dihapus');
        return redirect('tref_kelengkapan');
    }
}
