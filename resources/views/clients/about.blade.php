{{-- Header --}}
@include('clients.blocks.header')

{{-- End Header --}}
{{-- Banner --}}

 <!--Form Back Drop-->
        <div class="form-back-drop"></div>
        
        <!-- Hidden Sidebar -->
        <section class="hidden-bar">
            <div class="inner-box text-center">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                <div class="title">
                    <h4>Get Appointment</h4>
                </div>

                <!--Appointment Form-->
                <div class="appointment-form">
                    <form method="post" action="https://webtendtheme.net/html/2024/ravelo/contact.html">
                        <div class="form-group">
                            <input type="text" name="text" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn style-two">
                                <span data-hover="Submit now">Submit now</span>
                                <i class="fal fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!--Social Icons-->
                <div class="social-style-one">
                    <a href="contact.html"><i class="fab fa-twitter"></i></a>
                    <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                    <a href="contact.html"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </section>
        <!--End Hidden Sidebar -->
       
        
        <!-- Page Banner Start -->
        <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover" style="background-image: url('{{ asset('clients/images/banner/banner.jpg') }}');">
            <div class="container">
                <div class="banner-inner text-white">
                    <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- About Area start -->
        <section class="about-area-two py-100 rel z-1">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <span class="subtitle mb-35">About Company</span>
                    </div>
                    <div class="col-xl-9">
                        <div class="about-page-content" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="row">
                                <div class="col-lg-8 pe-lg-5 me-lg-5">
                                    <div class="section-title mb-25">
                                        <h2>Experience and Professional Tours & Travel Agency in the World</h2>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-years rmb-20">
                                        <span class="title bgc-secondary">Years Of Experience</span>
                                        <span class="text">We have</span>
                                        <span class="years">28+</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>We specialize in crafting unforgettable city experiences for travelers seeking discover the heart and soul of urban landscapes. Our expertly guided tours take journey through vibrant streets, historic landmarks, and hidden gems of each city.</p>
                                    <ul class="list-style-two mt-35">
                                        <li>Experience Agency</li>
                                        <li>Professional Team</li>
                                        <li>Low Cost Travel</li>
                                        <li>Online Support 24/7</li>
                                    </ul>
                                    <a href="about.html" class="theme-btn style-three mt-30">
                                        <span data-hover="Explore Tours">Explore Tours</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area end -->
        
{{-- End Banner --}}
 
       

{{-- Footer --}}

@include('clients.blocks.footer')
