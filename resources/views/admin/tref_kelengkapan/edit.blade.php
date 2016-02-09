
@extends('app')

@section('htmlheader_title')
    Ubah Kelengkapan
@endsection
@section('contentheader_title')
    <a href="{{ url('tref_kelengkapan') }}">Kelengkapan</a>
@endsection
@section('contentheader_description')
    Kelengkapan
@endsection


@section('main-content')
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="height: 50px;">
                    <span class="fa fa-edit"></span>
                    <div class="pull-right" style="margin-bottom: 0px;" >

                    </div>

                </div>
                <div class="panel-body">
                    <div class="box-body" ">
    {!! Html::ul($errors->all(), array('class'=>'alert alert-danger'))!!}
    {!! Form::model($tref_kelengkapan,array('url'=>'tref_kelengkapan/'.$tref_kelengkapan->id,'method'=>'patch'))!!}
    <table class="table">
        @include('tref_kelengkapan.form')
        <tr><td colspan="2">
                {!! Form::submit('simpan data',['class'=>'btn btn-primary btn-sm pull-right']) !!}

            </td></tr>
    </table>
    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>


@endsection

@stop