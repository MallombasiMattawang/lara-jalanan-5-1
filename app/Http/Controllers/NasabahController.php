<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Nasabah;
use App\Transaksi;
use Auth;
use Session;
use Input;

use App\Http\Requests\createNasabah;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        if(Auth::user()->name === 'awan') {
            // Do something

        //return view('dashboard');
        //$nasabah = Nasabah::where('alamat','=','bandung')->paginate(2);
        $nasabah = Nasabah::paginate(7);
        $data['nasabah'] = $nasabah->setPath('nasabah');
        return view('nasabah.index', $data);
        }
    }
    public function search(Request $request)
    {
         $keyword = $request['keyword'];
        $nasabah = Nasabah::where('alamat','=',$keyword)->paginate(2);

        $data['nasabah'] = $nasabah->setPath('nasabah');
        return view('nasabah.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('nasabah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(createNasabah $request)
    {
        //
        $filename  = Input::file('foto')->getClientOriginalName();
        $size      = Input::file('foto')->getSize();
        Input::file('foto')->move(public_path().'/foto/',$filename);
        $data = $request->all();
        $data = array(
            'nama_lengkap'=>Input::get('nama_lengkap'),
            'alamat'=>Input::get('alamat'),
            'no_rekening' => Input::get('no_rekening'),
            'foto' =>$filename );
        Nasabah::create($data);
        return redirect('nasabah');
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
       // $nasabah = Nasabah::find($id);
        //return $nasabah->transaksi()->get();
        //die;
        $transaksi = \DB::table('transaksis')
            ->join('users', 'users.id','=','transaksis.user_id')
            ->join('nasabahs', 'nasabahs.id','=','transaksis.nasabah_id')
            ->select('nasabahs.no_rekening', 'nasabahs.nama_lengkap',
                        'transaksis.created_at',
                        'transaksis.total',
                        'transaksis.jenis_transaksi',
                        'users.name')
            ->where('nasabahs.id','=',$id)
            ->get();
        $data['transaksi']=$transaksi;

        $data['nasabah'] = Nasabah::find($id);
        return view('nasabah.show',$data);
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
        $data['nasabah'] = Nasabah::find($id);
        return view('nasabah.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(createNasabah $request, $id)
    {
        //
        $data = $request->all();
        $nasabah = Nasabah::find($id);
        $nasabah->update($data);
        return redirect('nasabah');
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
        $nasabah = Nasabah::find($id);
        //$nasabah->delete();
        Session::flash('flash_message', 'Task successfully deleted!');
        return redirect('nasabah');
    }

    public function transaksi(Request $request)
    {
        $jenis = $request->jenis_transaksi;
        $nasabah = Nasabah::find($request->nasabah_id);
        $saldo = $nasabah->saldo;
        if($jenis=='debet')
        {
            //tambah saldo
            $newSaldo = ( $saldo + $request->total );
            $nasabah->saldo = $newSaldo;
            $nasabah->save();
            $pesan = '<span class="alert-danger"><i>Penyimpanan Berhasil</i> </span>';
            $transaksi = New transaksi($request->all());
            Auth::user()->createBy()->save($transaksi);
        }else{
            //cek saldo cukup tidak ?
            if($saldo < $request->total)
            {

              $pesan = '<span class="alert-danger"><i>maaf saldo tidak mencukupi</i> </span>';
            }else{
                //kalau cukup kurangi saldo
                $newSaldo = ( $saldo - $request->total );
                $nasabah->saldo = $newSaldo;
                $nasabah->save();
                $pesan = '<span class="alert-danger"><i>Penarikan Berhasil</i> </span>';
                $transaksi = New transaksi($request->all());
                Auth::user()->createBy()->save($transaksi);
            }

        }

        Session::flash('message',$pesan);
        //Transaksi::create($request->all());

        return redirect('nasabah/'.$request->nasabah_id);
    }
    public function prosesTransaksi(Request $request)
    {
        $transaksi = New transaksi($request->all());
        Auth::user()->createBy()->save($transaksi);
    }

    public function contoh()
    {
        $transaksi = Transaksi::find(4);
        return $transaksi->nasabah()->get();
    }
}
