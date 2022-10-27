@extends('layout.index')


@section('content')


    <!-- slider section -->
    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="container">
                <div class="carousel_btn_box">
                    <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-9 col-lg-7 ">
                                <div class="detail-box">
                                    <h1>
                                        Transport and <br>
                                        Logistic Service
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Get A Quote
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-9 col-lg-7 ">
                                <div class="detail-box">
                                    <h1>
                                        Transport and <br>
                                        Logistic Service
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Get A Quote
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-9 col-lg-7 ">
                                <div class="detail-box">
                                    <h1>
                                        Transport and <br>
                                        Logistic Service
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Get A Quote
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end slider section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>
                        </div>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                            in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                            are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                            the middle of text. All
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container">
                    <h2>
                        Our Services
                    </h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mx-auto ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s1.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Road Transport
                                </h5>
                                <p>
                                    fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    The
                                    point of using
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mx-auto ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s2.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Air Cargo
                                </h5>
                                <p>
                                    fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    The
                                    point of using
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mx-auto ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s3.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Sea Freight
                                </h5>
                                <p>
                                    fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    The
                                    point of using
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end service section -->




@endsection
