@extends('front')

@section('htmlheader_title')
    Tutorial
@endsection
@section('contentheader_title')
    Tutorial Programmer Jalanan
@endsection
@section('contentheader_description')
    Tutorial Programmer Jalanan
@endsection

@section('main-content')

    <div class="sectionWrapper">
        <div class="container">
            <div class="blog-thumbs no-bar">
                <div class="blog-posts">
                    @foreach($article as $n)
                        <div class="post-item fx" data-animate="fadeInLeft">
                            <div class="post-image">
                                <a href="blog-single.html">
                                    <div class="mask"></div>
                                    <div class="post-lft-info">
                                        <div class="main-bg">{!! tgl_indo2($n->created_at) !!}</div>
                                    </div>
                                    <img src="{{ asset('mypicture/'.$n->image) }}" alt="" width="220" height="220">
                                </a>
                            </div>
                            <article class="post-content">
                                <div class="post-info-container">
                                    <div class="post-info">
                                        <h2><a class="main-color" href="{{ url('post-detail/'.$n->id) }}">{{ $n->title }}</a></h2>
                                        <ul class="post-meta">
                                            <li><i class="fa fa-folder-open"></i>Category: <a href="#">{{ $n->category->title }}</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <p>{!! str_limit($n->content, $limit = 380, $end = ' ... ') !!}.
                                    {!! link_to('post-detail/'.$n->id,' Selengkapnya',['class'=>' fa fa-search']) !!}
                                </p>

                            </article>
                        </div>
                    @endforeach
                    <div class="pager skew-25 pull-right">
                        <ul>
                            {!! $article->render() !!}
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
