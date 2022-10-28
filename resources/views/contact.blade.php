@extends('layout.index');
@section('content')

    <!-- contact section -->
    <section class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="why_box">
                        <div class="heading_container">
                            <h2>
                                Why Choose Us
                            </h2>
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/w1.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Satisfied Customers
                                    </h5>
                                    <p>
                                        Officia expedita sequi dolorum error consectetur, quos provident repudiandae at, rerum veniam doloremque velit eius
                                    </p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/w2.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Shipment Tracking
                                    </h5>
                                    <p>
                                        Officia expedita sequi dolorum error consectetur, quos provident repudiandae at, rerum veniam doloremque velit eius
                                    </p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/w3.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Customer Support
                                    </h5>
                                    <p>
                                        Officia expedita sequi dolorum error consectetur, quos provident repudiandae at, rerum veniam doloremque velit eius
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form_container">
                        <div class="heading_container">
                            <h2>
                                Contact Us
                            </h2>
                        </div>
                        <form action="">
                            <input type="text" placeholder="Your Name" />
                            <input type="text" placeholder="Phone Number" />
                            <input type="email" placeholder="Email" />
                            <input type="text" class="message-box" placeholder="Message" />
                            <div class="btn_box">
                                <button>
                                    SEND
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

@endsection
