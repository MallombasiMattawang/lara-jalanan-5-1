
<!-- Header Start -->
<div id="headWrapper" class="clearfix">

    <!-- top bar start -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="cell-5">
                    <ul>
                        <li><a href="#"><i class="fa fa-envelope"></i>info@programmerjalanan.com</a></li>
                    </ul>
                </div>
                <div class="cell-7 right-bar">
                    <ul class="right">
                        <li><a href="{{ url('auth/login') }}"><i class="fa fa-unlock-alt"></i> Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- top bar end -->

    <!-- Logo, global navigation menu and search start -->
    <header class="top-head">
        <div class="container">
            <div class="row">
                <div class="cell-3" ><h2 class="block-head side-heading" style="margin-top: 20px;">Programmer <span class="pull-right">Jalanan.com</span></h2>
                    <a href="home.html"></a>
                </div>
                <div class="cell-9 top-menu">

                    <!-- top navigation menu start -->
                    <nav class="top-nav">
                        <ul>
                            <li class="selected"><a href="{{ url('/') }}"><i class="fa fa-home"></i><span>Home</span></a></li>
                            <li><a href="{{ url('post') }}"><i class="fa fa-font"></i><span>Article</span></a></li>
                            <li><a href="{{ url('tutorial') }}"><i class="fa fa-toggle-right"></i><span>Tutorial</span></a></li>

                            <li><a href="{{ url('contact') }}"><i class="fa fa-phone"></i><span>Contact</span></a></li>
                        </ul>
                    </nav>
                    <!-- top navigation menu end -->

                    <!-- top search start -->
                    <div class="top-search">
                        <a href="#"><span class="fa fa-search"></span></a>
                        <div class="search-box">
                            <div class="input-box left">
                                <input type="text" name="t" id="t-search" class="txt-box" placeHolder="Enter search keyword here..." />
                            </div>
                            <div class="left">
                                <input type="submit" id="b-search" class="btn main-bg" value="GO" />
                            </div>
                        </div>
                    </div>
                    <!-- top search end -->
                </div>
            </div>
        </div>
    </header>
    <!-- Logo, Global navigation menu and search end -->

</div>
<!-- Header End -->