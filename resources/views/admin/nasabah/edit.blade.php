@extends('template.master')
@section('content')

    <h2>Edit Client</h2>
    <hr/>
    {!! Html::ul($errors->all(), array('class'=>'alert alert-danger'))!!}
    {!! Form::model($nasabah,array('url'=>'nasabah/'.$nasabah->id,'method'=>'patch'))!!}
    <table class="table">
        @include('nasabah.form')
        <tr><td colspan="2">
                {!! Form::submit('simpan data',['class'=>'btn btn-primary btn-sm pull-right']) !!}

            </td></tr>
    </table>
    {!! Form::close()!!}
@stop