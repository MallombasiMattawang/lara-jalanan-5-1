
    <tr><td>No Rekening</td><td>{!! Form::text('no_rekening', null, ['class'=>'form-control'] ) !!}</td></tr>
    <tr><td>ce</td>
        <td>
            {!! Form::select('tref_aktifperizinan_id', App\Tref_aktifperizinan::lists('nm_aktif_perizinan', 'id'), null, ['class'=>'form-control']) !!}

        </td>
    </tr>
    <tr><td>Alamat</td><td>{!! Form::textarea('alamat', null, ['class'=>'form-control'] ) !!}</td></tr>
    <tr><td>Foto</td><td>{!! Form::file('foto',null,['class'=>'form-control']) !!}</td></tr>
