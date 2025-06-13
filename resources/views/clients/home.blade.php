{{-- Header --}}
@include('clients.blocks.header-home')

{{-- End Header --}}

{{-- Banner --}}
@include('clients.blocks.banner-home')



<!-- Destinations Area start -->
<section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <h2>Khám phá những kho báu của thế giới cùng Travelove</h2>
                    <p>Một trang web <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> trải nghiệm phổ biến nhất bạn sẽ nhớ mãi</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="destination-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{ asset('clients/assets/images/destinations/visiting-place1.jpg') }}" alt="Điểm đến">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Tours, Pháp</span>
                        <h5><a href={{ route('destination', ['id' => 1]) }}>Nhà thờ Basilica St Martin bằng bê tông nâu</a></h5>
                        <span class="time">3 ngày 2 đêm - Cặp đôi</span>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/mỗi người</span>
                        <a href="#" class="read-more">Đặt ngay <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="destination-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{ asset('clients/assets/images/destinations/visiting-place2.jpg') }}" alt="Điểm đến">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Wildest, Ý</span>
                        <h5><a href="{{ route('destination', ['id' => 2]) }}">Khung cảnh hồ nước xanh vào ban ngày</a></h5>
                        <span class="time">3 ngày 2 đêm - Cặp đôi</span>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$63.00</span>/mỗi người</span>
                        <a href="#" class="read-more">Đặt ngay <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="destination-item" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{ asset('clients/assets/images/destinations/visiting-place3.jpg') }}" alt="Điểm đến">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Ý</span>
                        <h5><a href="{{ route('destination', ['id' => 3]) }}">Người phụ nữ đứng gần Đấu trường La Mã, Rome</a></h5>
                        <span class="time">3 ngày 2 đêm - Cặp đôi</span>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$42</span>/mỗi người</span>
                        <a href="#" class="read-more">Đặt ngay <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="destination-item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{ asset('clients/assets/images/destinations/visiting-place4.jpg') }}" alt="Điểm đến">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Ý</span>
                        <h5><a href="{{ route('destination', ['id' => 4]) }}">Người phụ nữ đứng gần Đấu trường La Mã, Rome</a></h5>
                        <span class="time">3 ngày 2 đêm - Cặp đôi</span>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$52.00</span>/mỗi người</span>
                        <a href="#" class="read-more">Đặt ngay <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Destinations Area end -->


<!-- About Us Area start -->
<section class="about-us-area py-100 rpb-90 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-25">
                        <h2>Du lịch tự tin - Lý do hàng đầu chọn đại lý của chúng tôi</h2>
                    </div>
                    <p>Chúng tôi luôn nỗ lực để biến giấc mơ du lịch của bạn thành hiện thực với những điểm đến độc đáo và các địa danh nổi tiếng</p>
                    <div class="divider counter-text-wrap mt-45 mb-55"><span>Chúng tôi có <span><span
                                    class="count-text plus" data-speed="3000" data-stop="25">0</span> Năm</span> kinh nghiệm</span></div>
                    <div class="row">
                        <div class="col-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text k-plus" data-speed="3000" data-stop="3">0</span>
                                <span class="counter-title">Điểm đến nổi bật</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text m-plus" data-speed="3000" data-stop="9">0</span>
                                <span class="counter-title">Khách hàng hài lòng</span>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('destination', ['id' => 1]) }}" class="theme-btn mt-10 style-two">
                        <span data-hover="Khám phá điểm đến">Khám phá điểm đến</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <div class="about-us-image">
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape1.png') }}" alt="Hình dạng">
                    </div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape2.png') }}" alt="Hình dạng">
                    </div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape3.png') }}" alt="Hình dạng">
                    </div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape4.png') }}" alt="Hình dạng">
                    </div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape5.png') }}" alt="Hình dạng">
                    </div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape6.png') }}" alt="Hình dạng">
                    </div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape7.png') }}" alt="Hình dạng">
                    </div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/about.png') }}" alt="Giới thiệu">
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- About Us Area end -->


<!-- Popular Destinations Area start -->
<section class="popular-destinations-area rel z-1">
    <div class="container-fluid">
        <div class="popular-destinations-wrap br-20 bgc-lighter pt-100 pb-70">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Khám phá các điểm đến nổi tiếng</h2>
                        <p>Một trang web <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> trải nghiệm phổ biến nhất</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{ asset('clients/assets/images/destinations/destination1.jpg') }}"
                                    alt="Điểm đến">
                            </div>
                            <div class="content">
                                <h6><a href="{{ route('destination', ['id' => 1]) }}">Bãi biển Thái Lan</a></h6>
                                <span class="time">5352+ tour & 856+ hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{ asset('clients/assets/images/destinations/destination2.jpg') }}"
                                    alt="Điểm đến">
                            </div>
                            <div class="content">
                                <h6><a href="{{ route('destination', ['id' => 2]) }}">Parga, Hy Lạp</a></h6>
                                <span class="time">5352+ tour & 856+ hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{ asset('clients/assets/images/destinations/destination3.jpg') }}"
                                    alt="Điểm đến">
                            </div>
                            <div class="content">
                                <h6><a href="{{ route('destination', ['id' => 3]) }}">Castellammare del Golfo, Ý</a></h6>
                                <span class="time">5352+ tour & 856+ hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{ asset('clients/assets/images/destinations/destination4.jpg') }}"
                                    alt="Điểm đến">
                            </div>
                            <div class="content">
                                <h6><a href="{{ route('destination', ['id' => 4]) }}">Khu bảo tồn Canada, Canada</a></h6>
                                <span class="time">5352+ tour & 856+ hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{ asset('clients/assets/images/destinations/destination5.jpg') }}"
                                    alt="Điểm đến">
                            </div>
                            <div class="content">
                                <h6><a href="{{ route('destination', ['id' => 5]) }}">Dubai, Hoa Kỳ</a></h6>
                                <span class="time">5352+ tour & 856+ hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{ asset('clients/assets/images/destinations/destination6.jpg') }}"
                                    alt="Điểm đến">
                            </div>
                            <div class="content">
                                <h6><a href="{{ route('destination', ['id' => 6]) }}">Milos, Hy Lạp</a></h6>
                                <span class="time">5352+ tour & 856+ hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular Destinations Area end -->


<!-- Features Area start -->
<section class="features-area pt-100 pb-45 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="features-content-part mb-55" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-60">
                        <h2>Trải nghiệm du lịch tuyệt vời - Những điểm nổi bật của đại lý chúng tôi</h2>
                    </div>
                    <div class="features-customer-box">
                        <div class="image">
                            <img src="{{ asset('clients/assets/images/features/features-box.jpg') }}" alt="Tính năng">
                        </div>
                        <div class="content">
                            <div class="feature-authors mb-15">
                                <img src="{{ asset('clients/assets/images/features/feature-author1.jpg') }}" alt="Tác giả">
                                <img src="{{ asset('clients/assets/images/features/feature-author2.jpg') }}" alt="Tác giả">
                                <img src="{{ asset('clients/assets/images/features/feature-author3.jpg') }}" alt="Tác giả">
                                <span>4k+</span>
                            </div>
                            <h6>850K+ Khách hàng hài lòng</h6>
                            <div class="divider style-two counter-text-wrap my-25"><span><span class="count-text plus"
                                        data-speed="3000" data-stop="25">0</span> Năm</span></div>
                            <p>Chúng tôi tự hào mang đến các hành trình cá nhân hóa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <div class="row pb-25">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="{{ route('tour-detail', ['id' => 1]) }}">Cắm trại lều</a></h5>
                                <p>Cắm trại lều là cách tuyệt vời để hòa mình vào thiên nhiên</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="{{ route('tour-detail', ['id' => 2]) }}">Chèo thuyền kayak</a></h5>
                                <p>Chèo thuyền kayak là hoạt động ngoài trời đầy phấn khích</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item mt-20">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="{{ route('tour-detail', ['id' => 3]) }}">Đạp xe leo núi</a></h5>
                                <p>Đạp xe leo núi là môn thể thao nâng cao thể lực</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="{{ route('tour-detail', ['id' => 4]) }}">Câu cá & Du thuyền</a></h5>
                                <p>Câu cá và du thuyền mang lại niềm vui, là hoạt động tiêu biểu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Area end -->


<!-- Testimonials Area start -->
<section class="testimonials-area rel z-1">
    <div class="container">
        <div class="testimonials-wrap bgc-lighter">
            <div class="row">
                <div class="col-lg-5 rel" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="testimonial-left-image rmb-55"
                        style="background-image: url('{{ asset('clients/assets/images/testimonials/testimonial-left.jpg') }}');">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial-right-content" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-55">
                            <h2><span>5280</span> Global Clients Say About Us Services</h2>
                        </div>
                        <div class="testimonials-active">
                            <div class="testimonial-item">
                                <div class="testi-header">
                                    <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                    <h4>Quality Services</h4>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="text">"Our trip was absolutely a perfect, thanks this travel agency! They
                                    took care of every detail, from to accommodations, and even suggested incredible
                                    experiences"</div>
                                <div class="author">
                                    <div class="image"><img src="{{ asset('clients/assets/images/testimonials/author.jpg') }}"
                                            alt="Author"></div>
                                    <div class="content">
                                        <h5>Randall V. Vasquez</h5>
                                        <span>Graphics Designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testi-header">
                                    <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                    <h4>Quality Services</h4>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="text">"Our trip was absolutely a perfect, thanks this travel agency! They
                                    took care of every detail, from to accommodations, and even suggested incredible
                                    experiences"</div>
                                <div class="author">
                                    <div class="image"><img src="{{ asset('clients/assets/images/testimonials/author.jpg') }}"
                                            alt="Author"></div>
                                    <div class="content">
                                        <h5>Randall V. Vasquez</h5>
                                        <span>Graphics Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Area end -->


<!-- CTA Area start -->
<section class="cta-area pt-100 rel z-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-duration="1500" data-aos-offset="50">
                <div class="cta-item"
                    style="background-image: url('{{ asset('clients/assets/images/cta/cta1.jpg') }}');">
                    <span class="category">Tent Camping</span>
                    <h2>Explore the world best tourism</h2>
                    <a href="{{ route('tour-detail', ['id' => 1]) }}" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Khám phá Tours">Khám phá Tours</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="50" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="cta-item"
                    style="background-image: url('{{ asset('clients/assets/images/cta/cta2.jpg') }}');">
                    <span class="category">Sea Beach</span>
                    <h2>World largest Sea Beach in Thailand</h2>
                    <a href="{{ route('tour-detail', ['id' => 2]) }}" class="theme-btn style-two">
                        <span data-hover="Khám phá Tours">Khám phá Tours</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="cta-item"
                    style="background-image: url('{{ asset('clients/assets/images/cta/cta3.jpg') }}');">
                    <span class="category">Water Falls</span>
                    <h2>Largest Water falls Bali, Indonesia</h2>
                    <a href="{{ route('tour-detail', ['id' => 3]) }}" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Khám phá Tours">Khám phá Tours</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Area end -->


<!-- Blog Area start -->
<section class="blog-area py-70 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <h2>Read Latest News & Blog</h2>
                    <p>One site <span class="count-text plus bgc-primary" data-speed="3000"
                            data-stop="34500">0</span> most popular experience you’ll remember</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6">
                <div class="blog-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="content">
                        <a href="{{ route('blog', ['id' => 1]) }}" class="category">Travel</a>
                        <h5><a href="{{ route('blog', ['id' => 1]) }}">Ultimate Guide to Planning Your Dream Vacation with Ravelo
                                Travel Agency</a></h5>
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar-alt"></i> <a href="#">25 February 2024</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                        </ul>
                    </div>
                    <div class="image">
                        <img src="{{ asset('clients/assets/images/blog/blog1.jpg') }}" alt="Blog">
                    </div>
                    <a href="{{ route('blog', ['id' => 1]) }}" class="theme-btn">
                        <span data-hover="Book Now">Read More</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="blog-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="content">
                        <a href="{{ route('blog', ['id' => 2]) }}" class="category">Travel</a>
                        <h5><a href="{{ route('blog', ['id' => 2]) }}">Unforgettable Adventures Travel Agency Bucket List
                                Experiences</a></h5>
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar-alt"></i> <a href="#">25 February 2024</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                        </ul>
                    </div>
                    <div class="image">
                        <img src="{{ asset('clients/assets/images/blog/blog2.jpg') }}" alt="Blog">
                    </div>
                    <a href="{{ route('blog', ['id' => 2]) }}" class="theme-btn">
                        <span data-hover="Book Now">Read More</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="blog-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="content">
                        <a href="{{ route('blog', ['id' => 3]) }}" class="category">Travel</a>
                        <h5><a href="{{ route('blog', ['id' => 3]) }}">Exploring Culture and way Cuisine Travel Agency's they Best
                                Foodie Destinations</a></h5>
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar-alt"></i> <a href="#">25 February 2024</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                        </ul>
                    </div>
                    <div class="image">
                        <img src="{{ asset('clients/assets/images/blog/blog3.jpg') }}" alt="Blog">
                    </div>
                    <a href="{{ route('blog', ['id' => 3]) }}" class="theme-btn">
                        <span data-hover="Book Now">Read More</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area end -->

{{-- Footer --}}

@include('clients.blocks.footer-home')
