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
            @foreach ($tours as $tour)
            <div class="col-xxl-3 col-xl-4 col-md-6" style="margin-bottom: 30px">
                    <div class="destination-item block_tours" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <div class="ratting"><i class="fas fa-star"></i> {{ number_format($tour->rating, 1) }}</div>
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{ asset('clients/assets/images/gallery-tours/' . $tour->images[0] . '') }}"
                                alt="Destination">
                        </div>
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i>{{ $tour->destination }}</span>
                            <h5><a href="{{ route('tour-detail', ['id' => $tour->tourid]) }}">{{ $tour->title }}</a>
                            </h5>
                            <span class="time">{{ $tour->time }}</span>
                        </div>
                        <div class="destination-footer">
                            <span class="price"><span>{{ number_format($tour->priceAdult, 0, ',', '.') }}</span> VND /
                                người</span>
                            <a href="{{ route('tour-detail', ['id' => $tour->tourid]) }}" class="read-more">
                                Đặt ngay
                                <i class="fal fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
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
                        <h2>Trải nghiệm du lịch tuyệt đỉnh mang đến sự khác biệt cho công ty chúng tôi</h2>
                    </div>
                    <div class="features-customer-box">
                        <div class="image">
                            <img src="{{ asset('clients/assets/images/features/features-box.jpg') }}" alt="Features">
                        </div>
                        <div class="content">
                            <div class="feature-authors mb-15">
                                <img src="{{ asset('clients/assets/images/features/feature-author1.jpg') }}"
                                    alt="Author">
                                <img src="{{ asset('clients/assets/images/features/feature-author2.jpg') }}"
                                    alt="Author">
                                <img src="{{ asset('clients/assets/images/features/feature-author3.jpg') }}"
                                    alt="Author">
                                <span>4k+</span>
                            </div>
                            <h6>850K+ Khách hàng hài lòng</h6>
                            <div class="divider style-two counter-text-wrap my-25"><span><span class="count-text plus"
                                        data-speed="3000" data-stop="5">0</span>
                                    Năm</span></div>
                            <p>Chúng tôi tự hào cung cấp các hành trình được cá nhân hóa</p>
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
                                <h5><a href="{{ route('tour') }}">Chinh Phục Cảnh Quan Việt Nam</a></h5>
                                <p>Khám phá những cảnh đẹp hùng vĩ và tuyệt vời của đất nước Việt Nam.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="{{ route('tour') }}">Trải Nghiệm Đặc Sắc Việt Nam</a></h5>
                                <p>Trải nghiệm những hoạt động và lễ hội đặc trưng của văn hóa Việt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item mt-20">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="{{ route('tour') }}">Khám Phá Di Sản Việt Nam</a></h5>
                                <p>Khám phá các di sản thế giới và những kỳ quan thiên nhiên nổi tiếng.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="{{ route('tour') }}">Vẻ Đẹp Thiên Nhiên Việt </a></h5>
                                <p>Chinh phục vẻ đẹp tự nhiên hoang sơ và kỳ vĩ của Việt Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Area end -->

<!-- CTA Area start -->
<section class="cta-area pt-100 rel z-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-duration="1500" data-aos-offset="50">
                <div class="cta-item"
                    style="background-image: url( {{ asset('clients/assets/images/cta/cta1.jpg') }});">
                    <span class="category">Khám Phá Vẻ Đẹp Văn Hóa Việt</span>
                    <h2>Tìm hiểu những giá trị văn hóa độc đáo của các vùng miền Việt Nam.</h2>
                    <a href="{{ route('tour') }}" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Khám phá">Khám phá</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="50" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="cta-item"
                    style="background-image: url( {{ asset('clients/assets/images/cta/cta2.jpg') }});">
                    <span class="category">Bãi biển Sea</span>
                    <h2>Bãi trong xanh dạt dào ở Việt Nam</h2>
                    <a href="{{ route('tour') }}" class="theme-btn style-two">
                        <span data-hover="Khám phá">Khám phá</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="cta-item"
                    style="background-image: url( {{ asset('clients/assets/images/cta/cta3.jpg') }});">
                    <span class="category">Thác nước</span>
                    <h2>Thác nước lớn nhất Việt Nam</h2>
                    <a href="{{ route('tour') }}" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Khám phá">Khám phá</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Area end --



{{-- Footer --}}

@include('clients.blocks.footer-home')