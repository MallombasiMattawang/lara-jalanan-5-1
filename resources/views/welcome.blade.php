@extends('front')

@section('htmlheader_title')
    Home
@endsection
@section('contentheader_title')
    TRUE STORY ABOUT LIVE PROGRAMMER OF INDONESIA
@endsection
@section('contentheader_description')
    Menu dashboard
@endsection
@section('main-content')
        <div class="welcome">
            <div class="container">
                <h3 class="center block-head"><span class="main-color">MERDEKA</span> - DIRGAHAYU INDONESIAKU KE 70</h3>
                <p class="margin-bottom-0" style="font-family:Lucida Calligraphy;">Oke Cukup bahasa inggrisnya di header dan menunya, gua asli Indonesia jadi mulai sekarang isi contentnya bahasa Indonesia, cuman karna supaya keliatan kereen jadi gua selipin aja (meskipun grammarnya ancur), </p>
                <p style="font-family:Lucida Calligraphy;">gua cinta produk Indonesia cuman produk luar dipake aja. hehehe...</p>
                <p style="font-family:Lucida Calligraphy;">Website ini gua dedikasikan buat programmer kemaren sore kayak gua. yang jalan hidupnya penuh rintangan, kesakitan dan suka duka yang cuman kita yang ngerti. So, mari angkat sauh dan arungi samudra. sekali layar terbentang pantang biduk surut kepantai</p>
            </div>
        </div>
        <!-- Services boxes style 1 start -->
        <div class="gry-bg">
            <div class="container">
                <div class="row" style="font-family:Lucida Calligraphy;">
                    <div class="cell-4 service-box-1 fx" data-animate="fadeInUp" data-animation-delay="200">
                        <div class="box-top">
                            <i class="fa fa-font"></i>
                            <h3>Artikel</h3>
                            <a class="more-btn" href="{{ url('posts') }}">Read More</a>
                        </div>
                    </div>
                    <div class="cell-4 service-box-1 fx" data-animate="fadeInUp" data-animation-delay="400">
                        <div class="box-top">
                            <i class="fa fa-toggle-right"></i>
                            <h3>Tutorial</h3>
                            <a class="more-btn" href="{{ url('tutorial') }}">Read More</a>
                        </div>
                    </div>

                    <div class="cell-4 service-box-1 fx" data-animate="fadeInUp" data-animation-delay="800">
                        <div class="box-top">
                            <i class="fa fa-credit-card"></i>
                            <h3>My CV</h3>
                            <a class="more-btn" href="{{ url('cv') }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FUN Staff start -->
        <div class="fun-staff staff-1 block-bg-2 sectionWrapper">
            <div class="container">
                <div class="row">
                    <div class="cell-3">
                        <h3 class="block-head side-heading" style="color: #ffffff;">New<span><b>Article</b></span></h3>
                        <div class="viewAll">
                            <a class="btn" href="{{ url('posts') }}">Browse All Article</a>
                        </div>
                    </div>
                    <div class="cell-9">
                        <div class="homeGallery portfolio">
                            <!-- staff item start -->
                            @foreach (App\Article::limit(10)->orderby('id','DESC')->get() as $article)
                                <div>
                                    <div class="portfolio-item">
                                        <div class="img-holder">
                                            <div class="img-over">
                                                <a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
                                                <a href="{{ asset('mypicture/'.$article->image) }}" class="fx zoom" data-gal="prettyPhoto[pp_gal]" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                            </div>
                                            <img alt="" src="{{ asset('mypicture/'.$article->image) }}">
                                        </div>
                                        <div class="name-holder">
                                            <a href="#" class="project-name">{!! str_limit($article->title, $limit = 100, $end = '...') !!}</a>
                                            <span class="project-options">{{ $article->category->title }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            <!-- staff item end -->



                        </div><!-- .portfolioGallery end -->
                    </div>
                </div>

            </div><!-- .container end -->
        </div><!-- .funn-staff end -->



@endsection
