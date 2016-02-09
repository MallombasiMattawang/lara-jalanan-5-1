
@extends('app')

@section('htmlheader_title')
    Tambah Rincian Izin
@endsection
@section('contentheader_title')
    <a href="{{ url('tref_rincianizin') }}">Rincian Izin</a>
@endsection
@section('contentheader_description')
    Rincian Izin
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
                    <span class="fa fa-pencil"></span>
                    <div class="pull-right" style="margin-bottom: 0px;" >

                    </div>

                </div>
                <div class="panel-body">
                    <div class="box-body" ">
                        {!! Html::ul($errors->all(), array('class'=>'alert alert-danger'))!!}

                        {!! Form::open(array('url'=>'tref_rincianizin'))!!}
                        <table class="table">
                            @include('partials.formElement')
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