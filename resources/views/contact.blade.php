@extends('front')

@section('htmlheader_title')
    Contact
@endsection
@section('contentheader_title')
    Programmer Jalanan  @if(Session::has('flash_message'))
        <i>
            {{ Session::get('flash_message') }}
        </i>
    @endif
@endsection
@section('contentheader_description')
    Programmer Jalanan
@endsection

@section('main-content')

    <div class="padd-top-50">
        <div class="container">
            <div class="row">
                <div class="cell-12 contact-form fx" data-animate="fadeInLeft">
                    <h3 class="block-head">Tinggalkan Pesan</h3>
                    <form action="{{ url('/contact/send') }}" method="post" class="leave-comment contact-form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-input">
                            <label>Nama<span class="red">*</span></label>
                            <input type="text" name="name" required>
                        </div>
                        <div class="form-input">
                            <label>Email<span class="red">*</span></label>
                            <input type="email"  name="email" required>
                        </div>
                        <div class="form-input">
                            <label>Pesan<span class="red">*</span></label>
                            <textarea name="message" required></textarea>
                        </div>
                        <div class="form-input">
                            {!! app('captcha')->display(); !!}
                        </div>
                        <div class="form-input">
                            <input type="submit" class="btn btn-large main-bg" value="Submit">&nbsp;&nbsp;<input type="reset" class="btn btn-large" value="Reset">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>




@endsection
