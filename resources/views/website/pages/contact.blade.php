@extends('layouts.app')

@section('content')
<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5>Cairo, Egypt</h5>
                        <p>Nasr city</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5>02 0114 689 869</h5>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5>ahmedfathimamdouh25996@gmail.com</h5>
                        <p>Send me your query anytime!</p>
                    </div>
                </div>														
            </div>
            <div class="col-lg-8">
                <form class="form-area "  action="{{ url('/contactpage') }}" method="POST" class="contact-form text-right">
                    {{ csrf_field() }}
                    <div class="row">	
                        <div class="col-lg-6 form-group">
                            
                        
                            <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                            <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                            <div class="mt-20 alert-msg" style="text-align: left;"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="msg" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            <button class="primary-btn mt-20 text-white" style="float: right;" type="submit">Send Message</button>
                                                                    
                        </div>
                    </div>
                </form>	
            </div>
        </div>
    </div>	
</section>
<!-- End contact-page Area -->
@endsection