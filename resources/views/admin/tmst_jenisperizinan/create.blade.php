
@extends('app')

@section('htmlheader_title')
    Jenis Perizinan
@endsection
@section('contentheader_title')
    Jenis Perizinan
@endsection
@section('contentheader_description')
    Data Jenis Perizinan
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
                    <span class="fa fa-table"></span>
                    <div class="pull-right" style="margin-bottom: 0px;" >
                        {!! Form::open(array('url'=>'tmst_jenisperizinan/search')) !!}
                        <div class="input-group" style="width: 195px;">
                            {!! Form::text('keyword','',['class'=>'form-control input-sm pull-right','placeholder'=>'pencarian']) !!}
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-sm btn-default" style="margin-right: 5px;"><i class="fa fa-search"></i></button>
                                <a href="{{ url('tmst_jenisperizinan/create') }}" class="btn btn-sm btn-default" style="margin-right: 5px;"><i class="fa fa-plus"></i></a>
                                <a href="{{ url('tmst_jenisperizinan/create') }}" class="btn btn-sm btn-default"><i class="fa fa-print"></i></a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>
                <div class="panel-body">
                    <div class="box-body" ">
                        {!! Html::ul($errors->all(), array('class'=>'alert alert-danger'))!!}

                        {!! Form::open(array('url'=>'nasabah','files'=>'true'))!!}
                        <table class="table">
                            @include('tmst_jenisperizinan.form')
                            <tr><td colspan="2">
                                    {!! Form::submit('simpan data',['class'=>'btn btn-primary btn-sm pull-right']) !!}

                                </td></tr>
                        </table>
                        {!! Form::close()!!}

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection







@stop