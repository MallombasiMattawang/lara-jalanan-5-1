@extends('app')

@section('htmlheader_title')
    Home
@endsection
@section('contentheader_title')
Dashboard
@endsection
@section('contentheader_description')
    Menu dashboard
@endsection


@section('main-content')

	<div class="row">
		<div class="col-xs-12">
            <!-- Default box -->


            <!-- /////////////////////////////////////////////////////////// -->

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border ">

                    <div class="box-title pull-left">
                        <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Sembunyikan">Menu Informasi Website <i class="fa  fa-chevron-down"></i></button>

                    </div>
                </div>
                <div class="box-body text-center">
                    <a href="{{ url('article') }}" class="btn btn-app">
                        <i class="fa fa-edit"></i> Artikel
                    </a>
                    <a href="{{ url('Category') }}" class="btn btn-app">
                        <i class="fa fa-bookmark"></i> Kategori Artikel
                    </a>
                    <a href="{{ url('Comment') }}" class="btn btn-app">
                        <i class="fa fa-comments-o"></i> Komentar
                    </a>
                    <a href="{{ url('Download') }}" class="btn btn-app">
                        <i class="fa fa-download"></i> File Download
                    </a>
                    <a href="{{ url('JadwalPerizinan') }}" class="btn btn-app">
                        <i class="fa fa-calendar"></i> Project
                    </a>
                    <a href="{{ url('Petunjuk') }}" class="btn btn-app">
                        <i class="fa fa-info-circle"></i> Tag
                    </a>
                    <a href="{{ url('Link') }}" class="btn btn-app">
                        <i class="fa fa-link"></i> My Skill
                    </a>
                    <a href="{{ url('Saran') }}" class="btn btn-app">
                        <i class="fa fa-dropbox"></i> Inbox
                    </a>
                    <a class="btn btn-app">
                        <i class="fa fa-pie-chart"></i> Poling
                    </a>
                </div><!-- /.box-body -->
                <div class="box-footer">

                </div><!-- /.box-footer-->
            </div><!-- /.box -->

            <!-- //////////////////////////////////////////////////////////////////////////////-->
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border ">

                    <div class="box-title pull-left">
                        <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Sembunyikan">Menu Aplikasi <i class="fa  fa-chevron-down"></i></button>

                    </div>
                </div>
                <div class="box-body text-center">
                    <a class="btn btn-app">
                        <i class="fa fa-users"></i> Users
                    </a>
                    <a class="btn btn-app">
                        <i class="fa fa-credit-card"></i> Level Users
                    </a>

                    <a class="btn btn-app">
                        <i class="fa fa-plus"></i> Hak Akses
                    </a>

                </div><!-- /.box-body -->
                <div class="box-footer">

                </div><!-- /.box-footer-->
            </div><!-- /.box -->

		</div>
	</div>

@endsection
