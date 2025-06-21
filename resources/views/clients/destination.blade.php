{{-- Header --}}
@include('clients.blocks.header')

<!-- Page Banner Start -->
@include('clients.blocks.banner', ['title' => 'Điểm đến'])
{{-- Search Filter --}}
<div class="container container-1400">
    <div class="search-filter-inner" data-aos="zoom-out-down" data-aos-duration="1500" data-aos-offset="50">
        <div class="filter-item clearfix">
            <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
            <span class="title">Điểm đến</span>
            <select name="destination" id="destination">
                <option value="">Chọn điểm đến</option>
                <option value="dn">Đà Nẵng</option>
                <option value="cd">Côn Đảo</option>
                <option value="hn">Hà Nội</option>
                <option value="hcm">TP. Hồ Chí Minh</option>
                <option value="hl">Hạ Long</option>
                <option value="nb">Ninh Bình</option>
                <option value="pq">Phú Quốc</option>
                <option value="dl">Đà Lạt</option>
                <option value="qt">Quảng Trị</option>
                <option value="kh">Khánh Hòa (Nha Trang)</option>
                <option value="ct">Cần Thơ</option>
                <option value="vt">Vũng Tàu</option>
                <option value="qn">Quảng Ninh</option>
                <option value="la">Lào Cai (Sa Pa)</option>
                <option value="bd">Bình Định (Quy Nhơn)</option>
            </select>

        </div>
        <div class="filter-item clearfix">
            <div class="icon"><i class="fal fa-calendar-alt"></i></div>
            <span class="title">Ngày khởi hành</span>
            <input type="text" id="start_date" name="start_date" class="datetimepicker datetimepicker-custom"
                placeholder="Chọn ngày đi" readonly>
        </div>
        <div class="filter-item clearfix">
            <div class="icon"><i class="fal fa-calendar-alt"></i></div>
            <span class="title">Ngày kết thúc</span>
            <input type="text" id="end_date" name="end_date" class="datetimepicker datetimepicker-custom"
                placeholder="Chọn ngày về" readonly>
        </div>
        <div class="search-button">
            <button class="theme-btn" type="submit">
                <span data-hover="Tìm kiếm">Tìm kiếm</span>
                <i class="far fa-search"></i>
            </button>
        </div>
    </div>
</div>
{{-- End Search Filter --}}

<!-- Popular Destinations Area start -->
<section class="popular-destinations-area pt-100 pb-90 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-40" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <h2>Khám phá các điểm đến phổ biến</h2>
                    <p>Website <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> trải nghiệm phổ
                        biến nhất mà bạn sẽ nhớ</p>
                    <ul class="destinations-nav mt-30">
                        <li data-filter="*" class="active">Tất cả</li>
                        <li data-filter=".domain-b">Miền Bắc</li>
                        <li data-filter=".domain-t">Miền Trung</li>
                        <li data-filter=".domain-n">Miền Nam</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gap-10 destinations-active justify-content-center">
                <div class="col-xl-3 col-md-6 item recent rating">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/destination1.jpg" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Thailand beach</a></h6>
                            <span class="time">5352+ tours & 856+ Activity</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 item features">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/destination2.jpg" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Parga, Greece</a></h6>
                            <span class="time">5352+ tours & 856+ Activity</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item recent city rating">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/destination3.jpg" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Castellammare del Golfo, Italy</a></h6>
                            <span class="time">5352+ tours & 856+ Activity</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item city features">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/destination4.jpg" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Reserve of Canada, Canada</a></h6>
                            <span class="time">5352+ tours & 856+ Activity</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 item recent">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/destination5.jpg" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Dubai united states</a></h6>
                            <span class="time">5352+ tours & 856+ Activity</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 item features rating">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="assets/images/destinations/destination6.jpg" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Milos, Greece</a></h6>
                            <span class="time">5352+ tours & 856+ Activity</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular Destinations Area end -->



@include('clients.blocks.new-letter')
<!-- Footer -->
@include('clients.blocks.footer')
