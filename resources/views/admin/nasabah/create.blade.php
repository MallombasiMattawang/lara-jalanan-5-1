@extends('template.master')
@section('content')

    <h2>Create Client</h2>
    <hr/>
    {!! Html::ul($errors->all(), array('class'=>'alert alert-danger'))!!}

    {!! Form::open(array('url'=>'nasabah','files'=>'true'))!!}
    <table class="table">
        @include('nasabah.form')
        <tr><td colspan="2">
                {!! Form::submit('simpan data',['class'=>'btn btn-primary btn-sm pull-right']) !!}

            </td></tr>
    </table>
    {!! Form::close()!!}
@stop