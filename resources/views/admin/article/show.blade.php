
@extends('app')

@section('htmlheader_title')
    Detail Article
@endsection
@section('contentheader_title')
    <a href="{{ url('article') }}">Detail Article</a>
@endsection
@section('contentheader_description')
    Detail Article
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
                    {!! link_to('article/'.$article->id.'/edit',' ',['class'=>' fa fa-pencil']) !!}
                    <div class="pull-right" style="margin-bottom: 0px;" >
                    </div>

                </div>
                <div class="panel-body">
                    <div class="box-body" ">
                    <table class="table table-bordered">
                        <tr><td width='220'>Title</td><td>{{ $article->title}}</td><td rowspan='3' width="220"><img src="{{ asset('mypicture/'.$article->image) }}" width="100%" height="200"></td></tr>
                        <tr><td>Subtitle</td><td>{{ $article->subtitle }}</td></tr>
                        <tr><td>Category</td><td>{{ $article->category->title }}</td></tr>
                        <tr><td>Content</td><td>{!! $article->content !!}</td></tr>

                        <tr><td>Dibuat</td><td>{{ $article->created_at }}</td></tr>
                        <tr><td>Diubah</td><td colspan="2">{{ $article->update_at }}</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @if($article->value == 'combobox')

        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading" style="height: 50px;">
                    <span class="fa fa-edit"> Masukan Daftar Pilihan</span>
                    <div class="pull-right" style="margin-bottom: 0px;" >

                    </div>

                </div>
                <div class="panel-body">
                    <div class="box-body" style="padding-top: 18px;">
                        {!! Form::open(array('url'=>'article/pilihanperusahaan')) !!}
                        {!! Form::hidden('article_id', $article->id)  !!}
                        <table class="table table-bordered">
                            <tr><td>Isi Pilihan</td><td>{!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'daftar pilihan']) !!}</td></tr>
                            <tr><td colspan="2"><?php
                                    if(Session::has('message'))
                                    {
                                        echo "<p>".Session::get('message')."</p>";
                                    }
                                    ?>
                                    {!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-sm pull-right']) !!}</td> </tr>
                        </table>


                        {!! Form::close() !!}
                        <br/>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="height: 50px;">
                    <span class="fa fa-edit"> Daftar Pilihan</span>
                    <div class="pull-right" style="margin-bottom: 0px;" >

                    </div>

                </div>
                <div class="panel-body">
                    <div class="box-body" style="padding-top: 18px;">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th class="text-center">No</th>
                                <th>Pilihan</th>
                                <th>Aksi</th>
                            </tr>
                            <?php $no=1;?>
                            @foreach($pilihanperusahaan as $t)
                                <tr>
                                    <td class="text-center" width="30">{{ $no }}</td>
                                    <td>{{ $t->name }}</td>
                                    <td>
                                        {!! Form::open(array('method'=>'delete', 'onsubmit' => 'ConfirmDelete()', 'url'=>'article/'.$t->id)) !!}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                                        {!! Form::hidden('_delete','DELETE') !!}
                                        {!! Form::hidden('cek_pilihan', 'yes')  !!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                                <?php $no++;?>
                            @endforeach
                        </table>
                        @include('partials.confirmDelete')
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection

@stop