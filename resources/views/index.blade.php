@include('layout.header')

<!-- Slider Start-->

<div class="slider-wrapper bg-cover d-flex align-items-center justify-content-center position-relative" id="home">
    <div class="main-overlay"></div>
    <!-- Background Video -->
    <video autoplay muted loop class="position-absolute top-0 start-0 w-100 h-100 bg-opacity" id="video-background">
        <source src="{{ asset('assets/img/bg-video2.mp4') }}" type="video/mp4" />
        Your browser does not support the video tag.
    </video>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-uppercase display-2 my-3">slpa</h1>
                <h5 class="fw-bold custom-letter-spacing text-uppercase">
                    Sri Lanka Ports Authority
                </h5>
                <h6 class="display-6 fw-light text-light">
                    Seamless Moves, Swift Solutions: Your Journey, Our Commitment in
                    Logistics Excellence!
                </h6>

                <button class="btn-custom btn-ltr" href="">
                    <div class="circle"></div>
                    <p class="btn-txt">Learn More</p>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Slider ENd-->

<!-- About Start-->
<section id="about">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-12 info-box">
                        <div class="header-style1 p-2">
                            <h4>About Us</h4>
                            <p class="text-justify">
                                Established in 1918, the Port of Colombo was initially
                                administered by the Colombo Port Commission. Over time, it
                                underwent significant transformations, leading to the
                                formation of the Sri Lanka Ports Authority in 1979.
                            </p>
                            <button class="btn-custom btn-ltr" href="">
                                <div class="circle"></div>
                                <p class="btn-txt">Know More</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 position-relative">
                <img src="{{ asset('assets/img/about.jpg') }}" alt="Port" class="info-box" id="about-image" />
                <div class="overlay-text">
                    <h3 class="text-light text-center">75+ Years of Experience</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About End-->


<!--Services Start-->
<section id="services">
    <div class="container text-center justify-content-center">
        <div class="row">
            <div class="col-12 intro text-center">
                <div class="header-style1 style2 p-2">
                    <h4>Our Services</h4>
                    <p class="text-justify">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste
                        quae dolore quidem, iure totam minus repudiandae alias error
                        dolor voluptatum facere velit nam pariatur tenetur sequi?
                        Voluptate, voluptatem!
                    </p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-sm-6">
                <div class="service-box">
                    <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="Services" />
                    <h5>ABC Service</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus dolores inventore quibusdam.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="service-box">
                    <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="Services" />
                    <h5>ABC Service</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus dolores inventore quibusdam.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="service-box">
                    <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="Services" />
                    <h5>ABC Service</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus dolores inventore quibusdam.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="service-box">
                    <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="Services" />
                    <h5>ABC Service</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus dolores inventore quibusdam.
                    </p>
                </div>
            </div>
        </div>
        <button class="btn-custom btn-ltr btn-color-change" href="">
            <div class="circle"></div>
            <p class="btn-txt">Know More</p>
        </button>
    </div>
</section>
<!--Services End-->

<!--Contact start-->

<div class="container bg-light my-5" id="contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 py-5 py-lg-0">
                <h6 class="text-warning text-uppercase font-weight-bold">
                    Get A Quote
                </h6>
                <h1 class="mb-4">Request A Free Quote</h1>
                <p class="mb-4">
                    Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore
                    sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet
                    dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed
                    diam duo
                </p>
                <button class="btn-custom btn-ltr" href="">
                    <div class="circle"></div>
                    <p class="btn-txt">Know More</p>
                </button>
            </div>
            <div class="col-lg-7" id="quote-box">
                <div class="py-5 px-4 px-sm-5">
                    <form class="py-5">
                        <div class="form-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Your Name"
                                required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0 p-4" placeholder="Your Email"
                                required="required" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Subject"
                                required="required" />
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" placeholder="Your Message" rows="3"></textarea>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button id="quote-box-btn" class="btn btn-block border-0 py-3 w-100" type="submit">
                                Get A Quote
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Contact end-->

<!--Custom Section Start-->
<section id="custom-section" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 intro text-center">
                <div class="style3">
                    <h4>Custom Section</h4>
                    <p class="text-justify">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="custom-slider" class="owl-theme owl-carousel">
        <div class="custom">
            <img src="{{ asset('assets/img/services2.jpg') }}" alt="" />
            <div class="main-overlay"></div>
            <div class="content">
                <h1>Main Title</h1>
                <h6>Sub Title</h6>
            </div>
        </div>
        <div class="custom">
            <img src="{{ asset('assets/img/services2.jpg') }}" alt="" />
            <div class="main-overlay"></div>
            <div class="content">
                <h1>Main Title</h1>
                <h6>Sub Title</h6>
            </div>
        </div>
        <div class="custom">
            <img src="{{ asset('assets/img/services2.jpg') }}" alt="" />
            <div class="main-overlay"></div>
            <div class="content">
                <h1>Main Title</h1>
                <h6>Sub Title</h6>
            </div>
        </div>
        <div class="custom">
            <img src="{{ asset('assets/img/services2.jpg') }}" alt="" />
            <div class="main-overlay"></div>
            <div class="content">
                <h1>Main Title</h1>
                <h6>Sub Title</h6>
            </div>
        </div>
    </div>
</section>
<!--Custom Section End-->

<!--Team Start-->

<div class="container">
    <div class="row">
        <div class="col-12 intro text-center">
            <div class="style4">
                <h4>Our Team</h4>
                <span>Meet Our Board of Directors</span>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
                    nesciunt magnam quas harum qui eaque.
                </p>
            </div>
        </div>
    </div>

    <div class="row justify-content-center g-4">
        <div class="col-4 col-lg-2 col-sm-4">
            <div class="team-member">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/img/team-member-0.png') }}" alt="" />
                    <div class="overlay"></div>
                    <div class="contact-details justify-content-between align-items-center">
                        <p><i class="bi bi-envelope"></i> abv@gmail.com</p>
                        <p><i class="bi bi-printer"></i> +94 112225588</p>
                        <p><i class="bi bi-telephone-plus"></i> +94 11278965</p>
                    </div>
                </div>
                <div class="content">
                    <h6>Name</h6>
                    <p>Position</p>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-2 col-sm-4">
            <div class="team-member">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/img/team-member-0.png') }}" alt="" />
                    <div class="overlay"></div>
                    <div class="contact-details justify-content-between align-items-center">
                        <p><i class="bi bi-envelope"></i> abv@gmail.com</p>
                        <p><i class="bi bi-printer"></i> +94 112225588</p>
                        <p><i class="bi bi-telephone-plus"></i> +94 11278965</p>
                    </div>
                </div>
                <div class="content">
                    <h6>Name</h6>
                    <p>Position</p>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-2 col-sm-4">
            <div class="team-member">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/img/team-member-0.png') }}" alt="" />
                    <div class="overlay"></div>
                    <div class="contact-details justify-content-between align-items-center">
                        <p><i class="bi bi-envelope"></i> abv@gmail.com</p>
                        <p><i class="bi bi-printer"></i> +94 112225588</p>
                        <p><i class="bi bi-telephone-plus"></i> +94 11278965</p>
                    </div>
                </div>
                <div class="content">
                    <h6>Name</h6>
                    <p>Position</p>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-2 col-sm-4">
            <div class="team-member">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/img/team-member-0.png') }}" alt="" />
                    <div class="overlay"></div>
                    <div class="contact-details justify-content-between align-items-center">
                        <p><i class="bi bi-envelope"></i> abv@gmail.com</p>
                        <p><i class="bi bi-printer"></i> +94 112225588</p>
                        <p><i class="bi bi-telephone-plus"></i> +94 11278965</p>
                    </div>
                </div>
                <div class="content">
                    <h6>Name</h6>
                    <p>Position</p>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-2 col-sm-4">
            <div class="team-member">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/img/team-member-0.png') }}" alt="" />
                    <div class="overlay"></div>
                    <div class="contact-details justify-content-between align-items-center">
                        <p><i class="bi bi-envelope"></i> abv@gmail.com</p>
                        <p><i class="bi bi-printer"></i> +94 112225588</p>
                        <p><i class="bi bi-telephone-plus"></i> +94 11278965</p>
                    </div>
                </div>
                <div class="content">
                    <h6>Name</h6>
                    <p>Position</p>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-2 col-sm-4">
            <div class="team-member">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/img/team-member-0.png') }}" alt="" />
                    <div class="overlay"></div>
                    <div class="contact-details justify-content-between align-items-center">
                        <p><i class="bi bi-envelope"></i> abv@gmail.com</p>
                        <p><i class="bi bi-printer"></i> +94 112225588</p>
                        <p><i class="bi bi-telephone-plus"></i> +94 11278965</p>
                    </div>
                </div>
                <div class="content">
                    <h6>Name</h6>
                    <p>Position</p>
                </div>
            </div>
        </div>
    </div>

</div>
</section>
<!--Team End-->


<!--Featured Serveices Start-->
<section id="featured-services">
    <div class="container-fluid">
        <div class="style3">
            <h4>Featured Services</h4>
        </div>
        <div class="row">
            <div class="col-lg-5 p-4 overlay-container hidden-sm">
                <div class="overlay"></div>
            </div>

            <div class="col-lg-7 bg-dark p-4 position-relative">
                <div class="row">
                    <div class="container">
                        <div class="row gy-4 p-4">
                            <div class="featured-service-box col-lg-6 col-sm-6">
                                <div class="display-4 text-uppercase header">
                                    <i class="bi bi-1-circle-fill"></i>
                                    <h3>Title 1</h3>
                                </div>
                                <div class="p-4">
                                    <p class="mb-0">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                    </p>
                                    <a class="view-link" href="#">View
                                        <span><i class="bi bi-chevron-double-right"></i></span></a>
                                </div>
                            </div>
                            <div class="featured-service-box col-lg-6 col-sm-6">
                                <div class="display-4 text-uppercase header">
                                    <i class="bi bi-1-circle-fill"></i>
                                    <h3>Title 2</h3>
                                </div>
                                <div class="p-4">
                                    <p class="mb-0">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                    </p>
                                    <a class="view-link" href="#">View
                                        <span><i class="bi bi-chevron-double-right"></i></span></a>
                                </div>
                            </div>
                            <div class="featured-service-box col-lg-6 col-sm-6">
                                <div class="display-4 text-uppercase header">
                                    <i class="bi bi-1-circle-fill"></i>
                                    <h3>Title 3</h3>
                                </div>
                                <div class="p-4">
                                    <p class="mb-0">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                    </p>
                                    <a class="view-link" href="#">View
                                        <span><i class="bi bi-chevron-double-right"></i></span></a>
                                </div>
                            </div>
                            <div class="featured-service-box col-lg-6 col-sm-6">
                                <div class="display-4 text-uppercase header">
                                    <i class="bi bi-1-circle-fill"></i>
                                    <h3>Title 4</h3>
                                </div>
                                <div class="p-4">
                                    <p class="mb-0">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                    </p>
                                    <a class="view-link" href="#">View
                                        <span><i class="bi bi-chevron-double-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Featured Serveices End-->

@include('layout.footer')
