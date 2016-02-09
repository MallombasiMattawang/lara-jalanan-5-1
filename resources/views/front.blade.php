<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

@include('partial_front.htmlheader')

<body style="overflow:hidden" class="">
<!-- site preloader start
<div class="page-loader">
    <div class="loader-in"></div>
</div>
<!-- site preloader end -->

<div class="pageWrapper fixedPage">

    @include('partial_front.mainheader')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('partial_front.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


    @include('partial_front.footer')

</div><!-- ./wrapper -->

@include('partial_front.scripts')

</body>
</html>