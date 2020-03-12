@extends('header')
@section('content')
 <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Contact</h2>
                        <p>Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and</p>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start contact-section-s3 -->
        <section class="contact-section-s3 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="contact-info">
                            <ul>
                                <li>
                                    <i class="fi flaticon-house"></i>
                                    <h4>Head Office</h4>
                                    <p>654, Dash soroni road jekor <br>dnaga, Melborn Austria</p>
                                </li>
                                <li>
                                    <i class="fi flaticon-email-1"></i>
                                    <h4>Email Address</h4>
                                    <p>demo@example.com</p>
                                </li>
                                <li>
                                    <i class="fi flaticon-call"></i>
                                    <h4>Telephone</h4>
                                    <p>++124752-324567</p>
                                </li>
                                <li>
                                    <i class="fi flaticon-alarm"></i>
                                    <h4>Office Hour</h4>
                                    <p>Mon-Sun: 09am – 7pm</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-md-8">
                        <div class="section-title">
                            <div class="icon">
                                <i class="fi flaticon-balance"></i>
                            </div>
                            <span>Let’s get in touch</span>
                            <h2>Need Consultancy, <br>Let’s get in touch Now!</h2>
                            <p>Raising a heavy maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nuncIt showed a lady fitted out with a fur hat and fur boa who sat upright, </p>
                        </div>

                        <div class="contact-form">
                            <form method="post" action="{{url('insert/message')}}" class="contact-validation-active">
                                {!! csrf_field() !!}
                                <div>
                                    <input type="text" class="form-control" name="name" placeholder="Name*">
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" placeholder="Email*">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone*">
                                </div>
                                <div class="fullwidth">
                                    <textarea class="form-control" name="message" id="note" placeholder="Case Description..."></textarea>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="theme-btn-s4">Submit It Now</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-section-s3 -->  


        <!--  start contact-map -->
        <!-- <section class="contact-map-section">
            <h2 class="hidden">Contact map</h2>
            <div class="contact-map">
                <iframe src="./contacts-us_files/embed.html" allowfullscreen=""></iframe>
            </div>
        </section> -->
        <!-- end contact-map -->

@endsection
       