@extends('front')

@section('htmlheader_title')
    Article
@endsection
@section('contentheader_title')
    Artikel Programmer Jalanan
@endsection
@section('contentheader_description')
    Artikel Programmer Jalanan
@endsection

@section('main-content')

<div class="sectionWrapper">
    <div class="container">
        <div class="row">
            <div class="cell-12">
                <div class="blog-posts">
                    <div class="post-item fx" data-animate="fadeInLeft">
                        <div class="details-img">
                            <div class="post-lft-info">
                                <div class="main-bg">{!! tgl_indo2($article->created_at) !!}<span class="tri-col"></span></div>
                            </div>
                            <div class=""
                                 style="background-image: url('http://placehold.it/200x200');">
                            </div>
                            <img src="{{ asset('mypicture/'.$article->image) }}" alt="img" width="100%" height="200">
                        </div>
                        <article class="post-content">
                            <div class="post-info-container">
                                <h1 class="main-color">{{ $article->title }}</h1>

                                <div class="post-info">
                                    <ul class="post-meta">
                                        <li><i class="fa fa-folder-open"></i>Category: <a href="#">{{ $article->category->title }}</a></li>
                                        <li class="meta-comments"><i class="fa fa-comments"></i>Comments: <a href="blog-single.html">5</a></li>
                                    </ul>
                                </div>
                            </div>
                            {!! $article->content !!}
                            <div class="post-tags">
                                <i class="fa fa-tags"></i><span>Tags: </span><a href="#">Responsive</a>,<a> Business</a>,<a href="#"> HTML</a>,<a> Design</a>,<a> WordPress</a>
                            </div>
                            <div class="share-post">
                                <span class="sh">Share this post on:</span>
                                <div id="shareme" data-text="Share this post"></div>
                            </div>
                        </article>
                    </div><!-- .post-item end -->
                    <div class="comments">
                        <h3 class="block-head">Comments</h3>
                        <?php $count = \DB::table('comments')->where('article_id', '=', $article->id)->count();?>
                        <p class="hint marginBottom bold">There are <span class="main-color">{{ $count }}</span> comments on this post</p>
                        <ul class="comment-list">
                            @foreach($article->comment as $comment)
                                <li>
                                    <article class="comment">
                                        <img src="{{ asset('mypicture/avatar92.jpg') }}" alt="avatar" class="comment-avatar">
                                        <div class="comment-content">
                                            <h5 class="comment-author skew-25">
                                                <span class="author-name skew25">{{ $comment->name }}</span>
                                                <a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>{{ tgl_indo3($comment->created_at) }}</span></a>
                                                <span class="comment-date skew25"></span>
                                            </h5>
                                            <p>{!! $comment->message !!}</p>
                                        </div>
                                    </article><!-- End .comment -->
                                </li>
                                @endforeach


                        </ul><!-- End .comment-list -->
                    </div>
                    <form action="{{ url('/post-detail/comment') }}" method="post" class="leave-comment contact-form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                        <h3 class="block-head">Tinggalkan Komentar</h3>

                        <div class="row">
                            <div class="cell-6">
                                <div class="form-input">
                                    <input type="text" placeholder="name" name="name" required>
                                </div>
                            </div>
                            <div class="cell-6">
                                <div class="form-input">
                                    <input type="email" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <div class="cell-12">
                                <div class="form-input">
                                    <textarea class="txt-box textArea" name="message" cols="40" rows="7" id="messageTxt"  placeholder="Message" spellcheck="true" required></textarea>
                                </div>
                            </div>
                            <div class="cell-6">
                                {!! app('captcha')->display(); !!}
                            </div>

                            <div class="cell-6">
                                <input type="submit" class="btn btn-large main-bg pull-right" value="Comment">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
