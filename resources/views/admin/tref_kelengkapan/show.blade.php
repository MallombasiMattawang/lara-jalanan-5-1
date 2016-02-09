
@extends('app')

@section('htmlheader_title')
    Detail Kelengkapan
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
                    <span class="fa fa-table"></span>
                    <div class="pull-right" style="margin-bottom: 0px;" >

                    </div>

                </div>
                <div class="panel-body">
                    <div class="box-body" ">
        <table class="table table-bordered">
            <tr><td width='220'>Data Yang Dibutuhkan</td><td>{{ $tref_kelengkapan->name}}</td></tr>
            <tr><td>Satuan</td><td>{{ $tref_kelengkapan->value }}</td></tr>
            <tr><td>Dibuat</td><td>{{ $tref_kelengkapan->created_at }}</td></tr>
            <tr><td>Diubah</td><td colspan="2">{{ $tref_kelengkapan->update_at }}</td></tr>
        </table>
                </div>
            </div>
        </div>
    </div>


@endsection

@stop