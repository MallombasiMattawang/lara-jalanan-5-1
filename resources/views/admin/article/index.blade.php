@extends('app')

@section('htmlheader_title')
    List Article
@endsection
@section('contentheader_title')
    Article
@endsection
@section('contentheader_description')
    Data Article
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
                            {!! Form::open(array('url'=>'article/search')) !!}
                            <div class="input-group" style="width: 355px;">
                                {!! Form::text('keyword','',['class'=>'form-control input-sm pull-right','placeholder'=>'pencarian...']) !!}
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-sm btn-default" style="margin-right: 5px;"><i class="fa fa-search"></i></button>
                                    <a href="{{ url('article/create') }}" class="btn btn-sm btn-default" style="margin-right: 5px;"><i class="fa fa-plus"></i></a>
                                    <a href="{{ url('article/create') }}" class="btn btn-sm btn-default"><i class="fa fa-print"></i></a>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>

                    </div>
                    <div class="panel-body">

                        <div class="box-body" style="min-height: 300px;">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no=1;?>
                            @foreach($article as $n)
                                <tr>
                                    <td class="text-center">{{ $no }}</td>
                                    <td>{{ $n->title }}</td>
                                    <td>{{ $n->subtitle }}</td>
                                    <td width="30">
                                        <div class="btn-group pull-right">
                                            <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-gear"></i> Actions <span class="caret"></span>
                                            </button>

                                            <ul class="dropdown-menu" role="menu">
                                                <!-- View -->
                                                <li>{!! link_to('article/'.$n->id,' View',['class'=>' fa fa-search']) !!}</li>
                                                <li>{!! link_to('article/'.$n->id.'/edit',' Edit',['class'=>' fa fa-pencil']) !!}</li>

                                                <li role="separator" class="divider"></li>
                                                {!! Form::open(array('method'=>'delete', 'onsubmit' => 'ConfirmDelete()', 'url'=>'article/'.$n->id)) !!}
                                                <li style="margin-right: 15px;"><button type="submit" class="btn btn-danger btn-sm pull-right"><i class="fa fa-trash-o"></i> Delete</button> </li>
                                                {!! Form::hidden('_delete','DELETE') !!}
                                                {!! Form::close() !!}

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php $no++;?>
                            @endforeach
                            </tbody>
                        </table>

                        @include('partials.confirmDelete')
                            </div>
                        {!! $article->render() !!}
                    </div>
                </div>
            </div>

</div>
@endsection







@stop